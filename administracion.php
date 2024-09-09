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
					<a href="../proyecDos/admin/PanelAdmin.php">
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
				<input type="hidden" name="ci" value=" <?php // echo $ci;?>">
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