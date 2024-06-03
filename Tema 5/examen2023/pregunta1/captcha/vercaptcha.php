<?php
session_start();
include ('captcha.php'); // Incluye el archivo que genera el CAPTCHA
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPTCHA en texto</title>
</head>
<body>
    <h1>Ingresa el siguiente texto:</h1>
    <p><?php echo $captcha_text; ?></p>
    <form action="verificar.php" method="post">
        <label for="captcha_input">Introduce el texto mostrado:</label>
        <input type="text" id="captcha_input" name="captcha_input">
        <input type="hidden" name="captcha_text" value="<?php echo $captcha_text; ?>">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>
