<?php
session_start();

session_destroy();

header("location: /proyecDos/loggin.php");

?>