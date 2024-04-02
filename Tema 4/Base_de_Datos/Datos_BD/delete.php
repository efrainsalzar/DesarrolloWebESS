<?php
include('db_connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM persona WHERE id=".$id;
$result = $conn->query($sql);
echo "Se elimino correctamente";

?>
<meta http-equiv="refresh" content="4;url=read.php">