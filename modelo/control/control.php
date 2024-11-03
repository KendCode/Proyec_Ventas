<?php
include("../conexion/conexion.php");

$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];

//echo "el usuario es:".$nombre;
//echo "<br>contrasena: ".$contrasena;

// primer paso guardar la consulta
$consulta="SELECT * FROM usuario WHERE password='$contrasena'";
// segundo paso mostrar la consulta
// mysqli_query (agregamos la variable de la conexion, la consulta que queremos trabajar)
$resultado= mysqli_query($conexion,$consulta);

// tercer paso 
// mostrar lo recuperado de la base de datos en el ejercicio
// mysqli_fetch_assoc(varibale dela conexion y la consulta);
$resp= mysqli_fetch_assoc($resultado);

//echo "<br>el password de  usuario es: ".$resp['password'];
//echo "<br>el nombre usuario es: ".$resp['nombre'];

//echo "<br>el nombre del usuario usuario es: ".$resp['nombre'];
//echo "<br>el celular del usuario usuario es: ".$resp['celular'];

//$usu = $resp['nombre'];

if($nombre==$resp['nombre'] && $contrasena==$resp['password'])
{
   
//creamos la sesion
//session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
//$_SESSION['admin']=$usuario;
//$_SESSION['nombre']=$resp['nombre'];
// Utilizamos switch para manejar diferentes tipos de usuarios

 if($resp['id_sesion']==1){
    session_start();
     $_SESSION['admin']= $nombre;
    echo '<script>window.location="../../vista/administracion.php"</script>';
    
   
 }
 elseif($resp['id_sesion']==2){
    session_start();
    $_SESSION['admin']= $nombre;
    echo '<script>window.location="../../vista/administracion.php"</script>';
    
    //echo "Usuario tipo Administrativo";
 }  
 elseif($resp['id_sesion']==3){
    session_start();
     $_SESSION['admin']= $nombre;
    echo '<script>window.location="../../vista/administracion.php"</script>';
 }
 elseif($resp['id_sesion']==4){
    session_start();
    $_SESSION['cli']= $nombre;
    echo '<script>window.location="../../vista/ventas.php"</script>';
 }
 elseif($resp['id_sesion']==5){
     session_start();
     $_SESSION['cli']= $nombre;
     echo '<script>window.location="../vista/ventas.php"</script>';
 }
//creamos la sesion
//session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
//$_SESSION['usuario']=$usuario;
//$_SESSION['contrasena']=$contrasena;
//echo '<script>window.location="../ventas.php"</script>';
}else{
	echo "usuario incocorrecto";
   // echo "<script>alert('usuario o contraseña incorrecta')</script>";
    //echo '<script>window.location="../loggin.html"</script>';
    
}
//echo "id sesion".$resp['id_sesion'];
//$_SESSION['contrasena']=$contrasena;
//echo '<script>window.location="../administracion.php"</script>';



?>
