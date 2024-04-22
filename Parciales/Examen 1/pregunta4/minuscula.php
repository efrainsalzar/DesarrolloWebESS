<?php
if(isset($_COOKIE['cadena'])) {
    $cadena = $_COOKIE['cadena'];
    $cadenaMinuscula = strtolower($cadena);
    echo "<p>La cadena en minúsculas es: $cadenaMinuscula</p>";
}
?>
