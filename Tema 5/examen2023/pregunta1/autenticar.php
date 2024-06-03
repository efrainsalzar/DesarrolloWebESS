<?php 
session_start();
$correo = $_POST['correo'];
$password = $_POST['password'];

$passwordH = sha1($password);

include('db_connection.php');

$sql = "SELECT correo,nivel from usuarios 
where correo='$correo' and password='$passwordH'";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    $datos = $result->fetch_assoc();
    $_SESSION['correo'] = $datos['correo'];
    $_SESSION['nivel'] = $datos['nivel'];
    header("Location: examen2Parcial-1.html");
}
else{
    ?>
    Error usuario o Conatraseña no valido 
    <!-- <meta http-equiv="refresh" content="3; url=form_login.html">
    <?php
}
?>