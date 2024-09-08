
</head>
<body>
<?php

include("conexion/conexion.php");
session_start();

//include("bloqueo.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRACION</title>
</head>
<body>
    

<form action="" method="post">

	<h3>Ingrese el id del producto que esta buscando</h3>

	<input type="number" name="id_producto">
	<input type="submit" name="btn1" value="BUSCAR">


</form>



<?php
$id_producto=$_POST['id_producto'];

//primer paso
$consulta="SELECT * FROM producto WHERE id_producto = '$id_producto'";
//$consulta="SELECT * FROM ventas";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

echo "el id del producto buscado es: ".$fila['id_producto'];
echo "Descripcion del producto buscado es: ".$fila['descrip_producto'];
?>
<!-- 
<table border="2">

	<tr>
		<th>CI</th>
		<th>NOMBRE</th>
		<th>APELLIDO PATERNO</th>
		<th>APELLIDO MATERNO</th>
		<th>GENERO</th>
		<th>EDAD</th>
		<th>CELULAR</th>
		<th>CONTRASEÑA</th>
		<th>ROL</th>
		<th>ELIMINAR</th>
		<th>MODIFICAR</th>

	</tr>
	<tr>
		<td><?php //echo $fila['ci'];?></td>
		<td><?php //echo $fila['nombre'];?></td>
			<td><?php //echo $fila['ap_pat'];?></td>
			<td><?php //echo $fila['ap_mat'];?></td>
			<td><?php //echo $fila['genero'];?></td>
			<td><?php //echo $fila['edad'];?></td>
			<td><?php //echo $fila['celular'];?></td>
			<td><?php //echo $fila['contrasena'];?></td>
			<td><?php //echo $fila['id_sesion'];?></td>
			<?php //$ci=$fila['ci']; 
			//echo "el ci buscado es: ".$ci;
			?>

			<td><form action="control/abm.php" method="post">
				<input type="hidden" name="ci" value="<?php //echo $ci;?>">
			<input type="submit" name="btn1" value="ELIMINAR">	
			</form></td>
			<td>
				<form action="modificar.php" method="post">
				<input type="hidden" name="ci" value="<?php// echo $ci;?>">
			<input type="submit" name="btn2" value="MODIFICAR">	
			</form>
			</td>
	</tr>


</table>
 -->


<?php
}


?>

<!-- 
<p>REGISTRO DE NUEVO ESTUDIANTE</p>
<form action="registro.php">
	
	<input type="submit" value="REGISTRAR NUEVO ESTUDIANTE">
</form>

 -->



</body>
</html>