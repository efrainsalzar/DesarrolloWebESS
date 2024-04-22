<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="read_styles.css">
<title>Tabla con estilos de borde en PHP</title>
</head>
<body>
<?php
include("db_connection.php");
if (isset($_GET['ordenar']))
{   

    $ordenar=$_GET['ordenar'];
    $sql = "SELECT imagen,titulo,autor,ideditorial,anio FROM libros order by $ordenar asc";

}
else
{
    $sql = "SELECT imagen,titulo,autor,ideditorial,anio FROM libros";
}

$result = $conn->query($sql);

if($result->num_rows > 0){
?>
    <h1>Base de Datos tabla "LIBROS"</h1>
    <table border="1">
        <tr>
            <th><a href="pregunta5.php?ordenar=imagen">Imagen</a></th>
            <th><a href="pregunta5.php?ordenar=titulo">Titulo</a></th>
            <th><a href="pregunta5.php?ordenar=autor">Autor</a></th>
            <th><a href="pregunta5.php?ordenar=ideditorial">Editorial</a></th>
            <th><a href="pregunta5.php?ordenar=anio">Año</a></th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><img src="../images/<?php echo $row["imagen"]; ?>"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["ideditorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

<?php
} else {
    echo "0 resultados";
}

mysqli_close($conn);
?>

</body>
</html>
