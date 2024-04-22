<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Plantilla</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    
    include('db_connection.php');
    include('verificar.php');
    include('permisos.php');
    
    $sql = "SELECT id, nombre, apellido, sexo, edad, ocupacion FROM persona WHERE id =".$id;
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    
    $sql="SELECT id,nombre from ocupaciones";
    $resultocupa = $con->query($sql);
    ?>
    
    <h1>Editar Persona</h1>

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
        <select name="ocupacion_id" >
            <?php while ($ocupacion = $resultocupa->fetch_assoc()) {
        ?>
        <option value="<?php  echo $ocupacion['id'] ?>"   
        <?php echo $ocupacion['id']==$datos['ocupacion_id']?"selected":"";?>
        
        ><?php  echo $ocupacion['nombre'] ?></option>
        <?php }?>
         </select>
        <br>
        <input type="submit" value="Guardar cambios">
    </form>
</body>

</html>