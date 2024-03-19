<?php
include('clasePila.php');
session_start();
if (!isset($_SESSION['p'])) {
    $_SESSION['p'] = new Pila();
}
$valor = $_GET['valor'];
$_SESSION['p']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menuPila.html">