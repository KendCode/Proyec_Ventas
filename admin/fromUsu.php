<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REGISTRO USUARIO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h3>FORMULARIO DE REGISTRO USUARIO</h3>



<form action="../control/abm.php" method="post" enctype="multipart/form-data">
	<!-- CI:
	<input type="text" name="ci" > -->
	<br>
	NOMBRE:
	<input type="text" name="nombre" >

	<br>
APELLIDO:
<input type="text" name="apellido" >



	<br>
CONTRASEÑA:
<input type="text" name="password" >


	<br>
EMAIL:
<input type="email" name="email">

	<br>
CELULAR:
<input type="text" name="nro_celular">


	<br>
DIRECCION:
<input type="text" name="direccion">
	<br>
ID SESION:
<input type="number" name="id_sesion">


<!-- <br> FOTOGRAFIA
<input type="file" name="archivo"> -->

<br>

<input type="submit" name="agregar" value="REGISTRAR">
</form>



</body>
</html>