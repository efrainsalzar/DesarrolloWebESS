<?php
include("db_connection.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion = $_POST["ocupacion"];

$sql= "INSERT INTO persona (nombre, apellido, sexo, edad, ocupacion ) 
    values ('$nombre', '$apellido', '$sexo', $edad, '$ocupacion')";
echo "Creado correctamente";
$result = $conn->query($sql);

?>

<meta http-equiv="refresh" content="4;url=read.php">