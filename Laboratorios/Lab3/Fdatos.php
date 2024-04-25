<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosTabla.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexion.php');
    $numero = $_POST['numeroA'];

    $sql = "Select id,carrera from carrera";
    //$result = $con->query($sql);

    ?>
    <form action="ListaAlumnos.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="numeroA" value="<?php echo $numero;?>">
    <label class="l1" for="archivo">Fotografia</label>
    <label class="l2" for="nombres">Nombres</label>
    <label class="l3" for="apellidos">Apellidos</label>
    <label class="l4" for="cu">C U</label>
    <label class="l5" for="sexo">Sexo</label>
    <label class="l6" for="carrera">Carrera</label>
    <?php
    for($i=0; $i<$numero; $i++){
        
    ?>
        <div>
        <input type="file" name="fotografia<?php echo $i; ?>">
        <input type="text" name="nombre<?php echo $i; ?>">
        <input type="text" name="apellido<?php echo $i; ?>">
        <input type="text" name="cu<?php echo $i; ?>">
        <input type="radio" name="sexo<?php echo $i; ?>" value="M">Masculino
        <input type="radio" name="sexo<?php echo $i; ?>" value="F">Femenino
        <select name="carrera_<?php echo $i; ?>">
            <?php 
            $result = $con->query($sql);
            while ($carrera = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $carrera['id'] ?>"><?php echo $carrera['carrera'] ?></option>
            <?php } ?>
        </select>
        </div>
    <?php
    }
    ?>
        <div>
            <input type="submit" value="Insertar">
            <input type="reset" value="Borrar">
        </div>
    </form>
</body>
</html>