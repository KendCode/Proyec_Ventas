<?php
session_start(); // Asegúrate de iniciar la sesión

// Verificar si la variable de sesión está definida
if (!isset($_SESSION['cli'])) {
    // Redirigir a una página de error o de inicio de sesión
    header("Location: principal.php");
    exit(); // Detener la ejecución del script
}
?>