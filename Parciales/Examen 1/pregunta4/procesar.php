<?php
if(isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];

    echo "<p>Cadena ingresada: $cadena</p>";
    ?>
     <ul>
     <li><a href='mayuscula.php'>Convertir a mayúscula</a></li>
     <li><a href='minuscula.php'>Convertir a minúscula</a></li>
     <li><a href='oracion.php'>Convertir a oración</a></li>
     </ul>
    <?php
} else {
    echo "<p>No se ha ingresado ninguna cadena.</p>";
}
?>
