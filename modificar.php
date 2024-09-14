<?php include("conexion/conexion.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO DE MODIFICACIÓN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>FORMULARIO DE MODIFICACIÓN</h3>

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

echo "el ci buscado es: ".$fila['ci'];
echo "el nombre del buscado es: ".$fila['nombre'];
?>




<form action="control/abm.php" method="post">
	CI:
	<input type="text" name="ci" readonly value="<?php echo $fila['ci']; ?>" >
	<br>
	NOMBRE:
	<input type="text" name="nombre" value="<?php echo $fila['nombre'];?>">

	<br>
APELLIDO:
<input type="text" name="ap_pat" value="<?php echo $fila['apellido'];?>">



	<br>
PASSWORD:
<input type="text" name="ap_mat" value="<?php echo $fila['password'];?>">


	<br>
EMAIL:
<input type="text" name="edad" value="<?php echo $fila['email'];?>">


	<br>
NRO CELULAR:
<input type="text" name="genero" value="<?php echo $fila['nro_celular'];?>">


	<br>
DIRECCION:
<input type="text" name="celular" value="<?php echo $fila['direccion'];?>">


	<br>
SESION
<input type="text" name="contrasena" value="<?php echo $fila['id_sesion'];?>">


<input type="submit" name="btn3" value="MODIFICAR">
</form>

<?php
}
?>

</body>
</html>