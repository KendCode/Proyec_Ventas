<?php
include("../conexion/conexion.php");

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//echo "el usuario es:".$usuario;


// primer paso guardar la consulta
$consulta="SELECT * FROM usuario WHERE nombre='$usuario'";
// segundo paso mostrar la consulta
// mysqli_query (agregamos la variable de la conexion, la consulta que queremos trabajar)
$resultado= mysqli_query($conexion,$consulta);

// tercer paso 
// mostrar lo recuperado de la base de datos en el ejercicio
// mysqli_fetch_assoc(varibale dela conexion y la consulta);
$resp= mysqli_fetch_assoc($resultado);

//echo "el ci del usuario usuario es: ".$resp['ci'];

//echo "<br>el nombre del usuario usuario es: ".$resp['nombre'];
//echo "<br>el celular del usuario usuario es: ".$resp['celular'];



if($usuario==$resp['usuario'] && $contrasena==$resp['contrasena'])
{
//echo "usuario tipo estudiante";
//creamos la sesion
//session_start();
//$_SESSION["va el nombre de la sesion"]=$usuario;
//$_SESSION['admin']=$usuario;
//$_SESSION['nombre']=$resp['nombre'];
// Utilizamos switch para manejar diferentes tipos de usuarios
    switch ($resp['id_sesion']) {
        case '1':
            echo "Bienvenido, gerente";
            echo '<script>window.location="../administracion.php"</script>';
            break;
        case '2':
            echo "Bienvenido, administrador";
            echo '<script>window.location="../administracion.php"</script>';
            break;
        case '3':
            echo "Bienvenido, tecnico";
            echo '<script>window.location="../administracion.php"</script>';
            break;
        case '4':
            echo "Bienvenido, empleado";
            break;
        case '5':
            echo "Bienvenido, cliente";
            echo '<script>window.location="../administracion.php"</script>';
            break;
        default:
            echo "Bienvenido, Usuario";
            echo '<script>window.location="../administracion.php"</script>';
            break;
    }
//$_SESSION['contrasena']=$contrasena;
echo '<script>window.location="../administracion.php"</script>';
}else{
//	echo "usuario incocorrecto";
    echo "<script>alert('usuario o contraseña incorrecta')</script>";
   echo '<script>window.location="../loggin.php"</script>';
    
}


?>
