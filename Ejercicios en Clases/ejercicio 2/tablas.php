<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 10; // Número de filas
$b = 10; // Número de columnas

echo "<table border='1'>";

for ($i = 1; $i <= $a; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= $b; $j++) {
        $multiplo = $i * $j * 2; // Calcular el múltiplo de 2
        echo "<td>$multiplo</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>