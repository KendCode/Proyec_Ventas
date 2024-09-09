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
					<figcaption class="text-center text-titles">User Name</figcaption>
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
					<a href="admin.html" class="btn btn-info">
						<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO USUARIO
					</a>
				</li>
				<li>
					<a href="admin-list.html" class="btn btn-success">
						<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE USUARIOS
					</a>
				</li>
			</ul>
		</div>

		<div class="container-fluid">
			<form class="well">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="form-group label-floating">
							<span class="control-label">¿A quién estas buscando?</span>
							<input class="form-control" type="text" name="search_admin_init" required="" title="Buscar">
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

		<!-- Panel listado de busqueda de administradores -->
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-search"></i> &nbsp; BUSCAR USUARIOS</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">DNI</th>
									<th class="text-center">NOMBRES</th>
									<th class="text-center">APELLIDOS</th>
									<th class="text-center">TELÉFONO</th>
									<th class="text-center">A. CUENTA</th>
									<th class="text-center">A. DATOS</th>
									<th class="text-center">ELIMINAR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>7890987651</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>Telefono</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<form>
											<button type="submit" class="btn btn-danger btn-raised btn-xs" title="si">
												<i class="zmdi zmdi-delete"></i>
											</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>7890987651</td>
									<td>Nombres</td>
									<td>Apellidos</td>
									<td>Telefono</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<a href="#!" class="btn btn-success btn-raised btn-xs">
											<i class="zmdi zmdi-refresh"></i>
										</a>
									</td>
									<td>
										<form>
											<button type="submit" class="btn btn-danger btn-raised btn-xs" title="ss">
												<i class="zmdi zmdi-delete"></i>
											</button>
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