<?php
if (isset($_COOKIE['resultado'])) {
    echo "El resultado de la operación seleccionada es: " . $_COOKIE['resultado'];
    // Eliminar la cookie después de mostrar el resultado
    //setcookie('resultado', '', time() - 3600, '/');
} else {
    echo "No hay ningún resultado para mostrar.";
}
?>
