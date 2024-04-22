<?php
include('db_connection.php');
include('verificar.php');
include('permisos.php');

$id = $_GET['id'];

$sql = "DELETE FROM persona WHERE id=".$id;
$result = $conn->query($sql);
if(!$result){
    die("Error al eliminar datos: ". $con->error);
}
?>
<div>Se elimino con exito</div>
<meta http-equiv="refresh" content="4; url=read.php">