<?php

include 'clases.php';
session_start();

if (!isset($_SESSION['listaAlumnos'])) {
    $_SESSION['listaAlumnos'] = new ListaAlumnos();
}

$listaAlumnos = $_SESSION['listaAlumnos'];

if (isset($_POST['submit_insert'])) {
    $cu = $_POST['cu'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    $alumnoNuevo = new Alumno($cu, $nombres, $apellidos);
    $listaAlumnos->insertarAlumno($alumnoNuevo);
    $_SESSION['listaAlumnos'] = $listaAlumnos;
}

if (isset($_POST['submit_delete'])) {
    $cu = $_POST['cu'];
    $exito = $listaAlumnos->eliminarAlumno($cu);

    if ($exito) {
        echo "<p>Alumno eliminado correctamente.</p>";
    } else {
        echo "<p>Error al eliminar el alumno.</p>";
    }

    $_SESSION['listaAlumnos'] = $listaAlumnos;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <form action="javascript::preguntaCuatro()" method="post">
        <h3>Insertar Nuevo Alumno</h3>
        <label for="cu">CU:</label>
        <input type="text" id="cu" name="cu" required><br><br>
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required><br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>
        <input type="submit" name="submit_insert" value="Insertar Alumno">
    </form>

    <h2>Lista de Alumnos</h2>
    <?php
    $listaAlumnos->mostrarLista();
    ?>

</body>
</html>
