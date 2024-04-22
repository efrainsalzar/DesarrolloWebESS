<?php
    include("connection.php");

    $imagen = $_FILES['imagen']['name'];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ideditorial = $_POST["ideditorial"];
    $anio = $_POST["anio"];

    $temp = $_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo = explode(".", $imagen);
    $extension = end($arreglo);// obtengo la extension del archivo
    $nuevonombre = uniqid() . "." . $extension;//Le doy un nuevo nombre de archivo
    $ruta = "imageness/" . $nuevonombre;
    copy($temp, $ruta);//copio el archivo a la carpeta de imagenes

    $sql = "INSERT INTO libros (imagen, titulo, autor, ideditorial, anio) 
            VALUES ('$nuevonombre', '$titulo', '$autor', $ideditorial, $anio)";
    
    $result = $conn->query($sql);  
    if(!$result){
        die("Error al insertar datos: " . $conn->error);
    }
?>
<div>Se insertó con éxito</div>
<meta http-equiv="refresh" content="5; url=read.php">
