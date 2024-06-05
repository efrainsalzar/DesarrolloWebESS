<style>

table {
  border-collapse: collapse;
}

td{
    padding: 5px;
}
</style>
<?php
    include("conexion.php");

    $sql = "SELECT id, imagen, titulo, autor, ideditorial, anio FROM libros ";
    $result = $con->query($sql);
    $i = 1;

if($result->num_rows > 0){
    ?>
    <table border='1'>
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año</th>
            
        </tr>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width=60></td>
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

mysqli_close($con);
?>
