<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fila=$_GET["fila"];
    ?>
    <form action="llamar.php" method="post">
    <input type="hidden" name="fila" value="<?php echo $fila;?>">
        <label for="nombre">Libro</label>
        <input type="text" name="nombrelibro">

        <input type="submit" value="Insertar">
    </form>
</body>
</html>