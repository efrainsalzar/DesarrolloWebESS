<?php
if(isset($_COOKIE['cadena'])) {
    //minusculas
    $cadena = $_COOKIE['cadena'];
    $cadena = strtolower($cadena);

    //mayusculas
    $firstChar = strtoupper($cadena[0]);
    
    // Concatenar cadena
    $cadenaOracion = $firstChar . substr($cadena, 1);
    echo "<p>La cadena en oración es: $cadenaOracion</p>";
}

?>
