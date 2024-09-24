<?php

include("../conexion/conexion.php");
include("../bloqueo.php"); 
// Desactivar la visualización de errores
ini_set('display_errors', 0);
error_reporting(0);

//include("bloqueo.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Usuarios</title>
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

				<li>
					<a href="../admin/productos.php"><i class="zmdi zmdi-mall"></i> Productos</a>
				</li>
				<li>
					<a href="../admin/usuarios.php"><i class="zmdi zmdi-account"></i> Usuarios</a>
				</li>

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
				<h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administrador <small>USUARIOS</small></h1>
			</div>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
				<li>
					<a href="fromUsu.php" class="btn btn-info">
						<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO
					</a>
				</li>
				<li>
					<a href="listUsu.php" class="btn btn-success">
						<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE USUARIOS
					</a>
				</li>
			</ul>
		</div>

		<div class="container-fluid">
			<form class="well" method="post">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="form-group label-floating">
							<span class="control-label">¿A quién estas buscando?</span>
							<input class="form-control" type="number" name="ci" required="" title="Buscar">
						</div>
					</div>
					<div class="col-xs-12">
						<p class="text-center">
							<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
						</p>
					</div>
				</div>
			</form>
		</div>

<?php
$ci = $_POST['ci'];

//primer paso
$consulta="SELECT * FROM usuario WHERE ci = '$ci'";
//$consulta="SELECT * FROM usuario";
//segunda paso 
$respuesta=mysqli_query($conexion,$consulta);

// tercer paso
// 
while($fila=mysqli_fetch_array($respuesta))
{

//echo "el id del producto buscado es: ".$fila['id_usuario'];
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
                                    <th scope="col" class="text-center">CI</th>
                                    <th scope="col" class="text-center">NOMBRE</th>
                                    <th scope="col" class="text-center">APELLIDO</th>
                                    <th scope="col" class="text-center">CONTRASEÑA</th>
                                    <th scope="col" class="text-center">EMAIL</th>
                                    <th scope="col" class="text-center">N°CELULAR</th>
                                    <th scope="col" class="text-center">DIRECCION</th>
                                    <th scope="col" class="text-center">ID SESION</th>
                                    <th scope="col" class="text-center">MODIFICAR</th>
                                    <th scope="col" class="text-center">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"><?php echo $fila['ci']; ?></td>
                                    <td scope="row"><?php echo $fila['nombre']; ?></td>
                                    <td scope="row"><?php echo $fila['apellido']; ?></td>
                                    <td scope="row"><?php echo $fila['password']; ?></td>
                                    <td scope="row"><?php echo $fila['email']; ?></td>
                                    <td scope="row"><?php echo $fila['nro_celular']; ?></td>
                                    <td scope="row"><?php echo $fila['direccion']; ?></td>
                                    <td scope="row"><?php echo $fila['id_sesion']; ?></td>
									<?php //$ci=$fila['ci']; 
									//echo "el ci buscado es: ".$ci;
									?>
										<td>
											<form action="ModiUsu.php" method="post">
												<input type="hidden" name="ci" value=" <?php echo $ci; ?> ">
												<input type="submit" name="btn3" value="MODIFICAR"  class="btn btn-success btn-raised btn-xs">	
											</form>
											</td> 
									<td><form action="../control/abm.php" method="post">
										<input type="hidden" name="ci" value="<?php echo $ci;?>">
										<input type="submit" name="btn1" value="ELIMINAR" class="btn btn-danger btn-raised btn-xs">	
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