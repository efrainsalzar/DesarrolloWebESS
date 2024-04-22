<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (!empty($num1) && !empty($num2)) {
        // Realizar la operación y guardar el resultado en una cookie
        switch ($operation) {
            case 'sumar':
                $resultado = $num1 + $num2;
                setcookie('resultado', $resultado, time() + (86400 * 30), '/'); // Cookie válida por 30 días
                header("Location: resultado.php");
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                setcookie('resultado', $resultado, time() + (86400 * 30), '/'); // Cookie válida por 30 días
                header("Location: resultado.php");
                break;
            default:
                echo "Operación no válida";
                break;
        }
    } else {
        echo "Por favor, introduce ambos números.";
    }
}
?>
