<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    include("conexion.php");
    if($_GET['id']){
        $id = $_GET['id'];
        echo $id;
        $sql = "SELECT titulo, autor, ideditorial, anio FROM libros WHERE id =".$id;
        $result = $con->query($sql);
        $data = $result->fetch_assoc();
    }
    else{
        $id="";
    }
    ?>
    <input type="hidden" id="id" value="<?php echo $id?>">
    <label for="">Titulo</label>
    <input type="text" id="titulo" value="<?php echo $data['titulo']?> "><br>
    <label for="">Autor</label>
    <input type="text" id="autor" value="<?php echo $data['autor'] ?>"><br>
    <label for="">Editorial</label>
    <input type="text" id="editorial" value="<?php echo $data['ideditorial'] ?>"><br>
    <label for="">Año</label>
    <input type="number" id="anio" value="<?php echo $data['anio'] ?>"><br>
    <button id="binsertar" onclick="editarDatos()">Editar</button>
</body>

</html>