<?php
session_start();

echo isset($_SESSION['correo']) ? $_SESSION['correo'] : '';
?>
