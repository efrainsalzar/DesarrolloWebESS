<?php
$num = $_POST['numero'];

$numS = (string)$num;
$numA = str_split($numS);

$sumar = array_sum($numA);
echo $sumar;

?>