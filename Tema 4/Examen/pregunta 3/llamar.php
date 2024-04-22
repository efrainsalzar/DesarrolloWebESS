<?php
    include("clase.php");

    $palabra = $_POST["palabra"];
    $operacion = $_POST["operacion"];

    $cadena = (string) $palabra;

    $op = new PalabraCD($palabra);

    switch($operacion){
        case 'cuadrado':
            $op->cuadrado();
            break;
        case 'diagonal':
            $op->diagonal();
            break;
    }
?>