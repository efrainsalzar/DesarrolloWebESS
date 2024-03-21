<?php
include('claseCola.php');
session_start();
if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola();
}
$valor = $_POST['valor'];
$_SESSION['cola']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menuCola.html">