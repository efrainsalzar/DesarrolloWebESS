<?php
include('clasePila.php');
session_start();
if (!isset($_SESSION['p'])) {
    echo "error no hay elementos";
} else {

    $valor = $_SESSION['p']->imprimir();
}
?>
<meta http-equiv="refresh" content="4;url=menuPila.html">