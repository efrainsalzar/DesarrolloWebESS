<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla0.css">
    <title>Tabla calendarios</title>
</head>
<body>
<?php
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$tamano = $_POST['tamano'];

echo $mes;
echo $anio;
$dias = ['lunes','martes','miércoles', 'jueves', 'viernes'];

$fecha = $año.´-´.$mes.´-´01;

$dia_semana = date('N', strtotime($fecha));

// Convertir el nombre del mes a su número correspondiente
$mes_numerico = date_parse($mes)['month'];

$num_dias = cal_days_in_month(CAL_GREGORIAN, $mes_numerico, $anio);

//
echo $fecha;
echo $dia_semana;
echo $num_dias;


// Imprimir la tabla de calendario
echo "<table>";
echo "<tr>";
foreach ($dias as $dia) {
    echo "<th>$dia</th>";
}
echo "</tr>";

echo "<tr>";
// Rellenar los espacios vacíos al inicio del mes
for ($i = 1; $i < $dia_semana; $i++) {
    echo "<td></td>";
}

$dia_actual = 1;
while ($dia_actual <= $num_dias) {
    // Si es domingo, cerrar fila y comenzar una nueva
    if ($dia_semana == 8) {
        echo "</tr><tr>";
        $dia_semana = 1;
    }

    // Imprimir el número del día
    echo "<td>$dia_actual</td>";

    // Mover al siguiente día
    $dia_actual++;
    $dia_semana++;
}

// Completar la última semana con espacios vacíos si es necesario
while ($dia_semana <= 7) {
    echo "<td></td>";
    $dia_semana++;
}

echo "</tr>";
echo "</table>";

?>

</body>
</html>
