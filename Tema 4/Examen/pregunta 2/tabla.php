<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <title>Tabla Resultante</title>
</head>
<body>
    <?php
    $operacion = $_POST['operacion'];
    $numero = $_POST['valorN'];

    echo "<h1>Tabla de $operacion </h1>";
    echo "<table>";
    echo "<tr><th></th>";

    // columnas (1 al n)
    for ($i = 1; $i <= $numero; $i++) {
        echo "<th class='fila1'>$i</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $numero; $i++) {
        echo "<tr>";
        echo "<th class='columna1'>$i</th>"; //fila (1 al n)
        // resultados
        for ($j = 1; $j <= $numero; $j++) {
            $resultado = 0;
            switch ($operacion) {
                case 'suma':
                    $resultado = $i + $j;
                    break;
                case 'resta':
                    $resultado = $i - $j;
                    break;
                case 'multiplicacion':
                    $resultado = $i * $j;
                    break;
                case 'division':
                    $resultado = $i / $j;
                    break;
            }
            echo "<td>$resultado</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
