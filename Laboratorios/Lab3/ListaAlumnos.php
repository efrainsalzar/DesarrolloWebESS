<?php
include('conexion.php');
$numero= $_POST["numeroA"];

//echo $numero;

for($i=0; $i<$numero; $i++){
    //echo $i."<br>";
    $nombre[$i] = $_POST["nombre".$i];
    $apellido[$i] = $_POST["apellido".$i];
    $cu[$i] = $_POST["cu".$i];
    $sexo[$i] = $_POST["sexo".$i];
    $carrera_[$i] = $_POST["carrera_".$i];
    
    $nombrefoto=$_FILES['fotografia'.$i]['name'];  //obtenemos el nombre del archivo
    $temp=$_FILES['fotografia'.$i]['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo=explode(".", $nombrefoto);
    $extension=$arreglo[1];// obtengo la extension del archivo
    $nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
    copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes
    
    $fotografia[$i] = $nuevonobre;
    
}

for($i=0; $i<$numero; $i++){
    $sql= "INSERT INTO ALUMNO (fotografia, nombre, apellido, cu, sexo,codigocarrera ) 
    values ('$fotografia[$i]', '$nombre[$i]', '$apellido[$i]', '$cu[$i]', '$sexo[$i]',$carrera_[$i])";
    //echo $sql."<br>";

    $result = $con->query($sql);  
    if(!$result){
    die("Error al insertar datos: " . $con->error);
    }
}

    $sql2 = "Select id,carrera from carrera";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>



    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>C.U.</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
        <?php
        for ($i=0; $i<$numero; $i++) {
        ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><img src="images/<?php echo $fotografia[$i]; ?>" width="50" height="50"></td>
                <td><?php echo $nombre[$i]; ?></td>
                <td><?php echo $apellido[$i]; ?></td>
                <td><?php echo $cu[$i]; ?></td>
                <td><?php 
                    if($sexo[$i]=="F") {echo "Femenino";}
                    else {echo "Masculino";}
                    ?>
                </td>
                <td>
                    <?php 
                    $result = $con->query($sql2);
                    while ($carrerabd = $result->fetch_assoc()) {
                        if($carrera_[$i]==$carrerabd['id']){
                            $nombreCarrera=$carrerabd['carrera'];
                        }
                    }
                    echo $nombreCarrera;
                    ?>
                </td>
            </tr>
        <?php 
        } 
        ?>
    </table>

</body>
</html>