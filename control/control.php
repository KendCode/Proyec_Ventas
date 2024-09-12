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
    echo "usuario correcto";
//creamos la sesion
//session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
//$_SESSION['admin']=$usuario;
//$_SESSION['nombre']=$resp['nombre'];
// Utilizamos switch para manejar diferentes tipos de usuarios
    /*switch ($resp['id_sesion']) {
        case 1:
            echo "Bienvenido, gerente";
            header('Location: ../administracion.php');
            exit(); // Importante detener el script después de redireccionar
        case 2:
            echo "Bienvenido, administrador";
            header('Location: ../administracion.php');
            exit();
        case 3:
            echo "Bienvenido, tecnico";
            header('Location: ../administracion.php');
            exit();
        case 4:
            echo "Bienvenido, empleado";
            header('Location: ../ventas.php');
            break;
        case 5:
            echo "Bienvenido, cliente";
            header('Location: ../ventas.php');
            exit();
        default:
            echo "Bienvenido, Usuario";
            header('Location: ../ventas.php');
            exit();
    }*/
//echo "id sesion".$resp['id_sesion'];
//$_SESSION['contrasena']=$contrasena;
//echo '<script>window.location="../administracion.php"</script>';
}else{
	echo "usuario incocorrecto";
    //echo "<script>alert('usuario o contraseña incorrecta')</script>";
   //echo '<script>window.location="../loggin.php"</script>';
    
}


?>
