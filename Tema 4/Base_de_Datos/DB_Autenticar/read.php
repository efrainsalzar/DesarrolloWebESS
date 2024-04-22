<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="read_styles.css">
<title>Tabla con estilos de borde en PHP</title>
</head>
<body>
<?php
    include('verificar.php');
    echo $_SESSION['correo'];
    echo $_SESSION['nivel'];
?>
    <a href="cerrar.php">Cerrar Session</a>
<?php

    include("db_connection.php");

    $sql = "SELECT p.id,nombres,apellidos,edad,sexo,o.nombre as ocupacion FROM personas p
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id ";
    $result = $con->query($sql);
    $i = 1;

if($result->num_rows > 0){
    ?>
    <h1>Base de Datos "CENSO"</h1>
    <table border='1'>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Ocupacion</th>
            <th colspan="2">Actión</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apellido"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["edad"]; ?></td>
                <td><?php echo $row["ocupacion"]; ?></td>
                <td>
                    <?php if($_SESSION['nivel==1']) {?>
                        <a href="delete.php?id=<?php echo $row['id'] ?>"><img src="images/delete.jpg" alt=""></a>
                        <a href="form_update.php?id=<?php echo $row['id'] ?>"><img src="images/edit1.png" alt=""></a>
                    <?php
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

<?php
} else {
    echo "0 resultados";
}

mysqli_close($conn);

if($_SESSION['nivel']==1){
?>
    <br>
    <a class="crea" href="form_insert.html">Crear nuevo</a>
<?php
}
?>

</body>
</html>
