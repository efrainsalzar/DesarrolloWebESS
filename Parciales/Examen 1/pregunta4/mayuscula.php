<?php
if(isset($_COOKIE['cadena'])) {
    $cadena = $_COOKIE['cadena'];
    $cadenaMayuscula = strtoupper($cadena);
    echo "<p>La cadena en mayúsculas: $cadenaMayuscula</p>";
}
?>
