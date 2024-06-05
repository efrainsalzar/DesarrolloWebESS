<?php
include("conexion.php");
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ideditorial = $_POST["ideditorial"];
$anio = $_POST["anio"];

$nombre = $_FILES['imagen']['name'];  //obtenemos el nombre del archivo
$temp = $_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo = explode(".", $nombre);
$extension = $arreglo[1]; // obtengo la extension del archivo
$nuevonombre = uniqid() . "." . $extension; //Le doy un nuevo nombre de archivo
copy($temp, "images/" . $nuevonombre); //copio el archivo a la carpeta de imagenes


$sql = "INSERT INTO libros (imagen,titulo, autor, ideditorial, anio ) 
values ('$nuevonombre','$titulo', '$autor', '$ideditorial', $anio)";
//echo $sql;
$result = $con->query($sql);

if (!$result) {
    die("Error al insertar datos: " . $con->error);
}
?>