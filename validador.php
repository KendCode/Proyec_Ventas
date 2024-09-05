<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

if($usuario=="alfredo" && $contrasena=="12345678")
{

//creamos la sesion
session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
$_SESSION['usuario']=$usuario;
$_SESSION['contrasena']=$contrasena;
echo '<script>window.location="../proyecDos/ventas.php"</script>';
}elseif($usuario=="kender" && $contrasena=="123456"){
    //creamos la sesion
session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
$_SESSION['usuario']=$usuario;
$_SESSION['contrasena']=$contrasena;
echo '<script>window.location="../proyecDos/formulario/formulario.html"</script>';
   
    
}else{
    echo "<script>alert('usuario o contraseña incorrecta')</script>";
    echo '<script>window.location="../proyecDos/loggin.php"</script>';
}



?>
