<style>

table {
  border-collapse: collapse;
}

td{
    padding: 10px;
}
</style>
<?php
    include('obtener_correo.php');
    include("conexion.php");

    $sql = "SELECT id, imagen, titulo FROM libros ";
    $result = $con->query($sql);
    $i = 1;

if($result->num_rows > 0){
    ?>
    <h1>Base de Datos "BIBLIOTECA"</h1>
    <table border='1'>
        <tr>
            <th>Imagen</th>
            <th>Titulo</th>
            <th colspan="2">Actión</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width=60></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td>
                    <?php 
                    if($_SESSION['nivel'] == 1) {?>
                        <img src="images/delete.jpg" width=40 >
                        <img src="images/edit1.png" width=40 >
                    <?php
                    }
                    ?>
                </td>
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
