<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Plantilla</title>
</head>

<body>
    <h1>Editar Persona</h1>
    <?php
    include('db_connection.php');
    $id = $_GET['id'];
    $sql = "SELECT id, nombre, apellido, sexo, edad, ocupacion FROM persona WHERE id =".$id;
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    ?>

    
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" value="<?php echo $data['nombre'] ?>">
        <br>
        <label for="apellido">apellido:</label>
        <input type="text" name="apellido" value="<?php echo $data['apellido'] ?>">
        <br>
        <label for="edad">edad:</label>
        <input type="number" name="edad" value="<?php echo $data['edad'] ?>">
        <br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="M" <?php echo $data['sexo']=='M'?'checked':'' ?>>Masculino
        <input type="radio" name="sexo" value="F" <?php echo $data['sexo']=='F'?'checked':'' ?>>Femenino
        <br>
        <label for="ocupacion">ocupacion:</label>
        <input type="text" name="ocupacion" value="<?php echo $data['ocupacion'] ?>">
        <br>
        <input type="submit" value="Guardar cambios">
    </form>
</body>

</html>