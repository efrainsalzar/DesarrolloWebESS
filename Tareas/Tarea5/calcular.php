
<?php
    include ("operacioncadena.php");

    $cadena = $_POST['cadena'];
    $operacion = $_POST['operacion'];

    $op = new OperacionCadena($cadena);

    switch ($operacion){
        case 'invertir': echo $op->invertir(); break;
        case 'mayuscula': echo $op->mayusculas(); break;
        case 'minuscula': echo $op->minusculas(); break;
    }
?>