<?php

include("../../modelo/conexion/conexion.php");
include("bloqueo.php"); 
// Desactivar la visualización de errores
ini_set('display_errors', 0);
error_reporting(0);
//include("bloqueo.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	
</head>

<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ADMINISTRADOR <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php
                			include("../conexion/conexion.php");
                			session_start();
                			echo "<h2 class='display-4 fw-bolder'>".$_SESSION['admin']."</h2>";
                		?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../administracion.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Panel
					</a>
				</li>
				<li>
					<a href="../admin/productos.php"><i class="zmdi zmdi-mall"></i> Productos</a>
				</li>
				<li>
					<a href="../admin/usuarios.php"><i class="zmdi zmdi-account"></i> Usuarios</a>
				</li>
			</ul>
		</div>
	</section>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrador <small>PRODUCTOS</small></h1>
			</div>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
				<li>
					<a href="fromPro.php" class="btn btn-info">
						<i class="zmdi zmdi-plus" type="submit" value=""></i> &nbsp; NUEVO PRODUCTO
					</a>
				</li>
				<li>
					<a href="listPro.php" class="btn btn-success">
						<i class="zmdi zmdi-format-list-bulleted" type="sumit" value=""></i> &nbsp; LISTA DE PRODUCTOS
					</a>
				</li>
			</ul>
		</div>
		<div class="container-fluid"></div>
		<form class="well" action="" method="post">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<div class="form-group label-floating">
						<span class="control-label">¿Qué estas buscando?</span>
						<input class="form-control" type="number" name="id_producto" required="" title="Buscar">
					</div>
				</div>
				<div class="col-xs-12">
					<p class="text-center">
						<button type="submit" class="btn btn-primary btn-raised btn-sm" name="btn1" value="BUSCAR"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
					</p>
				</div>
			</div>
		</form>
		</div>
		<!-- <form action="" method="post">

			<h3>Ingrese el id del producto que esta buscando</h3>

			<input type="number" name="id_producto">
			<input type="submit" name="btn1" value="BUSCAR">


		</form> -->



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
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>