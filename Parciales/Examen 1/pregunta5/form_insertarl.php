<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("connection.php");

    $sql = "SELECT imagen,titulo,autor,ideditorial,anio FROM libros";
    $result = $conn->query($sql);
    ?>
    <h1>Registrar nuevo </h1>
    <form action="insertarl.php" method="post" enctype="multipart/form-data">
        <label for="imagen">imagen</label>
        <input type="file" name="imagen"><br>
        <label for="ttulo">Titulo:</label>
        <input type="text" name="titulo">
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor">
        <br>
        <label for="ideditorial">Editorial:</label>
        <input type="number" name="ideditorial">
        <br>
        <label for="anio">Año:</label>
        <input type="number" name="anio">
        <br>
        <input type="submit" value="Insertar">
</body>
</html>