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
<style>
	/* Estilos generales */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h3 {
    text-align: center;
    color: #333;
}

form {
    width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Estilos de los campos del formulario */
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

/* Estilo responsive */
@media (max-width: 991px) {
    form {
        width: 80%;
    }
}

@media (max-width: 768px) {
    form {
        width: 95%;
    }

    h3 {
        font-size: 18px;
    }

    input[type="text"], input[type="submit"] {
        font-size: 14px;
    }
}

</style>
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