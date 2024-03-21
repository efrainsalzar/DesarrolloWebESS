<?php
include('claseCola.php');
session_start();
if (!isset($_SESSION['cola'])) {
    echo "error no hay elementos";
} else {

    $valor = $_SESSION['cola']->mostrar();
}
?>
<meta http-equiv="refresh" content="4;url=menuCola.html">