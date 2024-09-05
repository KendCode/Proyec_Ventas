<?php

if($_SESSION['usuario']!='alfredo')
{
    header('Location: /proyecDos/loggin.php');
    exit();
}


?>