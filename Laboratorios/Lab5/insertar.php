<?php
include("conexion.php");

$titulo = $_GET["titulo"];
$autor = $_GET["autor"];
$anio = $_GET["anio"];
$ideditorial = $_GET["editorial"];

$sql= "INSERT INTO libros (titulo, autor, ideditorial, anio) 
VALUES ('$titulo', '$autor', '$ideditorial', $anio)";

$result = $con->query($sql);
?>