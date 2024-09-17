<?php
 include("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MODIFICACIÓN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>MODIFICACIÓN USUARIO</h3>

<?php 

$ci=$_POST['ci'];
//primer paso
$consulta="SELECT * FROM usuario WHERE ci = '$ci'";
//$consulta="SELECT * FROM estudiante";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el ci buscado es: ".$fila['ci'];
//echo "el nombre del buscado es: ".$fila['nombre'];

?>
<form action="../control/abm.php" method="post">
	CI:
	<input type="text" name="ci" readonly value="<?php echo $fila['ci']; ?>" >
	<br>
	NOMBRE:
	<input type="text" name="nombre" value="<?php echo $fila['nombre'];?>">

	<br>
APELLIDO:
<input type="text" name="apelldio" value="<?php echo $fila['apellido'];?>">



	<br>
PASSWORD:
<input type="text" name="password" value="<?php echo $fila['password'];?>">


	<br>
EMAIL:
<input type="text" name="email" value="<?php echo $fila['email'];?>">


	<br>
NRO CELULAR:
<input type="text" name="nro_celular" value="<?php echo $fila['nro_celular'];?>">


	<br>
DIRECCION:
<input type="text" name="direccion" value="<?php echo $fila['direccion'];?>">


	<br>
SESION
<input type="text" name="id_sesion" value="<?php echo $fila['id_sesion'];?>">


<input type="submit" name="btn3" value="MODIFICAR">
</form>

<?php
}
?>

</body>
</html>