<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $captcha_input = $_POST['captcha_input'];
    $captcha_text = $_POST['captcha_text'];

    if ($captcha_input == $captcha_text) {
        echo "CAPTCHA correcto";
        // Aquí puedes redirigir o realizar otras acciones
    } else {
        echo "CAPTCHA incorrecto";
        // Aquí puedes redirigir o realizar otras acciones
    }
}
?>
