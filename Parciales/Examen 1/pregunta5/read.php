<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="read_stilos.css">
<title>Tabla</title>
</head>
<body>
<?php
include("connection.php");

 $sql = "SELECT imagen,titulo,autor,ideditorial,anio FROM libros";


$result = $conn->query($sql);

if($result->num_rows > 0){
?>
    <h1>Base de Datos tabla "LIBROS"</h1>
    <table border="1">
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><img src="../images/<?php echo $row["imagen"]; ?>"></td>
                <td><?php echo $row["titulo"]; ?></td>
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
