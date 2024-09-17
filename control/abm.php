<?php

include ("../conexion/conexion.php");
?>
<?php
if(isset($_POST['btn1'])){

	$btn1=$_POST['btn1'];
	if($btn1=="ELIMINAR")
	{



$ci=$_POST['ci'];
//echo "el ci buscado es: ".$ci;

//DELETE FROM estudiante WHERE estudiante.ci = '$ci'
// primer
$consulta= "DELETE FROM usuario WHERE usuario.ci = '$ci'";
//segundo paso
mysqli_query($conexion,$consulta);
echo "<script>alert('usuario Eliminado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';

	}
}
?>
<!-- MODIFICAR -->
<?php

if(isset($_POST['btn3'])){

	$btn3=$_POST['btn3'];
	if($btn3=="MODIFICAR")
	{

$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
//
echo "el ci es: ".$ci."y el nombre es: ".$nombre;
$apellido=$_POST['apellido'];
$password=$_POST['password'];
$email=$_POST['email'];
$nro_celular=$_POST['nro_celular'];
$direccion=$_POST['direccion'];
$id_sesion=$_POST['id_sesion'];

//primer paso
$consulta="UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', password='$password', email = '$email', nro_celular='$nro_celular', direccion ='$direccion' WHERE usuario.ci = '$ci'";

//segundo paso
mysqli_query($conexion,$consulta);

//echo "<script>alert('usuario modificado de manera correcta')</script>";
   //echo '<script>window.location="../administracion.php"</script>';

	}
}

?>
<!-- REGSITRO -->

<?php

if(isset($_POST['agregar'])){

	$agregar=$_POST['agregar'];
	if($agregar=="REGISTRAR")
	{

$ci=$_POST['ci'];
// echo "el nuevo ci es: ".$ci;
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$passsword=$_POST['password'];
$email=$_POST['email'];
$nro_celular=$_POST['nro_celular'];
$direccion=$_POST['direccion'];
$id_sesion=$_POST['id_sesion'];
//$contrasena=$_POST['contrasena'];

// codigo para guardar imagen


        /*$nombre_foto   = $_FILES['archivo']['name'];
        $guardado = $_FILES['archivo']['tmp_name'];
        $tipo     = $_FILES['archivo']['type'];



        $extension = pathinfo($nombre_foto, PATHINFO_EXTENSION);*/
/*echo "el nombre del archivo es: ".$nombre;
echo "el guardado del archivo es: ".$guardado;
echo "el tipo del archivo es: ".$tipo;
echo "la extension del archivo es: ".$extension;*/

        /*$nombre_archivo = $ci . '.' . $extension;

        //if (move_uploaded_file($guardado, '/rudeal/sin_firmas/' . $nombre_archivo)) {
        if (move_uploaded_file($guardado, 'C:/xampp1/htdocs/2-2024/images/fotos/' . $nombre_archivo)) {

            echo "archivo guardado con exito";
        } else {
            echo "archivo no guardado";

        }*/
// primer paso para el query
$consulta="INSERT INTO usuario (ci, nombre, apellido, password, email, nro_celular, direccion, id_sesion) VALUES ('$ci','$nombre', '$apellido', '$passsword', '$email' ,'$nro_celular', '$direccion', '$id_sesion')";
//segundo paso
mysqli_query($conexion,$consulta);

echo "<script>alert('usuario registrado de manera correcta')</script>";
   echo '<script>window.location="../administracion.php"</script>';


}
}
?>