<?php
include("claseEstante.php");

session_start();
if (!isset($_SESSION['p'])) {
    $_SESSION['p'] = new Estante();
}
$fila = $_POST["fila"];
$nombre = $_POST["nombrelibro"];

switch($fila){
    case '1':
        $_SESSION['p']->insertarFila1($nombre);
        break;
    case '2':
        $_SESSION['p']->insertarFila2($nombre);
        break;
}
?>
<meta http-equiv="refresh" content="4;url=form_libro.html">
