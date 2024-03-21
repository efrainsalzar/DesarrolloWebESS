<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabla con estilos de borde en PHP</title>
<style> 
  table {border-collapse: collapse;}
  th, td {padding: 8px;}

</style>
</head>
<body>

<?php
include("db_connection.php");

$sql = "SELECT id,nombre,apellido,sexo,edad,ocupacion FROM persona";
$result = $conn->query($sql);

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
            <th colspan="2">Acción</th>
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
                <td><a href="update.php">Editar</a></td>
                <td><a href="delete.php">Borrar</a></td>
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
?>
<a href="form_insert.html">Crear nuevo</a>

</body>
</html>
