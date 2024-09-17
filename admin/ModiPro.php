<?php
 include("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MODIFICACIÓN PRODUCTO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>MODIFICACIÓN PRODUCTO</h3>

<?php 

$id_producto=$_POST['id_producto'];
//primer paso
$consulta="SELECT * FROM producto WHERE id_producto = '$id_producto'";
//$consulta="SELECT * FROM estudiante";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el id producto buscado es: ".$fila['id_producto'];
//echo "el nombre del buscado es: ".$fila['nombre'];

?>
<form action="../control/abm.php" method="post">
	ID PRODUCTO:
	<input type="text" name="id_producto" readonly value="<?php echo $fila['id_producto']; ?>" >
	<br>
	COLOR:
	<input type="text" name="color" value="<?php echo $fila['color'];?>">

	<br>
STOCK:
<input type="text" name="stock" value="<?php echo $fila['stock'];?>">



	<br>
TALLA:
<input type="text" name="talla" value="<?php echo $fila['talla'];?>">


	<br>
DESCRIPCION:
<input type="text" name="descrip_producto" value="<?php echo $fila['descrip_producto'];?>">


	<br>
PRECIO UNITARIO:
<input type="text" name="precio_unitario" value="<?php echo $fila['precio_unitario'];?>">


	<br>
ID MARCA:
<input type="text" name="id_marca" value="<?php echo $fila['id_marca'];?>">
	<br>
<input type="submit" name="btn10" value="MODIFICAR">
</form>

<?php
}
?>

</body>
</html>