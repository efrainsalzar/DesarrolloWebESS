<?php
include("conexion.php");

$id = $_GET["id"];

$sql= "DELETE FROM libros WHERE id=$id";

$result = $con->query($sql);
?>