<?php
 include("conexion/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CARRITO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>CARRITO DE COMPRA</h3>
<?php
$id_producto=$_POST['id_producto'];

//primer paso
$consulta="SELECT * FROM producto WHERE id_producto = '$id_producto'";
//$consulta="SELECT * FROM producto";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el id del producto buscado es: ".$fila['id_producto'];
//echo "Descripcion del producto buscado es: ".$fila['descrip_producto'];
?>
		<!-- Panel listado de busqueda de administradores -->
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-search"></i> &nbsp; BUSCAR PRODUCTOS</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">COLOR</th>
									<th class="text-center">STOCK</th>
									<th class="text-center">TALLA</th>
									<th class="text-center">DESCRIPCION</th>
									<th class="text-center">PRECIO UNI.</th>
									<th class="text-center">MARCA</th>
									<th class="text-center">MODIFICAR</th>
									<th class="text-center">ELIMINAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $fila['id_producto'];?></td>
									<td><?php echo $fila['color'];?></td>
									<td><?php echo $fila['stock'];?></td>
									<td><?php echo $fila['talla'];?></td>
									<td><?php echo $fila['descrip_producto'];?></td>
									<td><?php echo $fila['precio_unitario'];?></td>
									<td><?php echo $fila['id_marca'];?></td>
									<?php //$ci=$fila['ci']; 
									//echo "el ci buscado es: ".$ci;
									?>
									<td>
										<form action="ModiPro.php" method="post">
											<input type="hidden" name="id_producto" value="<?php echo $id_producto;?> ">
											<input type="submit" name="btn10" value="MODIFICAR"  class="btn btn-success btn-raised btn-xs">	
										</form>
									</td> 
									<td><form action="../control/abm.php" method="post">
										<input type="hidden" name="id_producto" value="<?php echo $id_producto;?>">
										<input type="submit" name="btn11" value="ELIMINAR" class="btn btn-danger btn-raised btn-xs">	
										</form>
									</td>
									<!-- 
										<p>REGISTRO DE NUEVO ESTUDIANTE</p>
										<form action="registro.php">

											<input type="submit" value="REGISTRAR NUEVO ESTUDIANTE">
										</form>

										 -->
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
}


?>
</body>
</html>