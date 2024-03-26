<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

    $cantidad = floatval($_POST["cantidad"]);

    // Realiza la conversión de unidades
    $conversionf = 0;
    $conversionk = 0;

    $conversionf = ($cantidad*9/5)+32;
    $conversionk = $cantidad + 273.15; 
    
    ?>
    <table border='1'>
        <tr>
        <th>Fahrenheit</th>
        <th>Kelvin</th>
        </tr>
        <tr>
            <td><?php echo $conversionf ; ?></td>
            <td><?php echo $conversionk ; ?></td>
            
        </tr>
    </table>
    <?php
    
?>
</body>
</html>


