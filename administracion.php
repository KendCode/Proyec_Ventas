<?php

include("conexion/conexion.php");
session_start();

//include("bloqueo.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../proyecDos/admin/css/main.css">
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
					<img src="../proyecDos/admin/assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="../proyecDos/principal.php" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="administracion.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Panel
					</a>
				</li>
				<li>
						<li>
							<a href="../proyecDos/admin/productos.php"><i class="zmdi zmdi-mall"></i>  Productos</a>
						</li>
						<li>
							<a href="../proyecDos/admin/usuarios.php"><i class="zmdi zmdi-account"></i>  Usuarios</a>
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
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert" title="d"></i></a>
				</li>
			</ul>
		</nav>
		
		<!-- TODO CONTENIDO PAGINA -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Sistema</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					USUARIOS
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">7</p>
					<small>Registro</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					PRODUCTOS
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-mall"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">10</p>
					<small>Registro</small>
				</div>
			</article>
		</div>
	</section>




</body>
</html>