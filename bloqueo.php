<?php
include("conexion/conexion.php");

$id_usuario = $_SESSION['id_usuario'];
if($_SESSION['usuario']!='alfredo')
{
    header('Location: /proyecDos/loggin.php');
    exit();
}


?>