<?php
include("db_connection.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion = $_POST["ocupacion"];

$sql= "UPDATE persona set nombre='$nombre', apellido='$apellido', 
sexo='$sexo', edad=$edad, ocupacion='$ocupacion' WHERE id=$id";
echo "Cambios guardados correctamente";
$result = $conn->query($sql);
?>

<meta http-equiv="refresh" content="4;url=read.php">