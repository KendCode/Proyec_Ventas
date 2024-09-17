<?php

include("../conexion/conexion.php");
session_start();

//include("bloqueo.php");
?>
<html lang="es">
<head>
    <title>Lista de usuarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listas.css">
    
    <style>
        /* Estilo para que la tabla tenga scroll */
        .table-responsive {
            max-height: 400px;
            /* Define la altura máxima que desees */
            overflow-y: auto;
            /* Permite el scroll vertical */
            width: 100%;
            /* Asegura que la tabla ocupe todo el ancho disponible */
        }

        /* Opcional: Ajustar el estilo de la tabla para que se vea bien dentro del contenedor */
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<h3 class="text-center">LISTA DE USUARIO</h3>
<form action="" method="post">
    <div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
				<li>
                    <input class="btn btn-info" type="submit" name="btn1" value="LISTA USUARIO">
				</li>
				<li>
					<a href="productos.php" class="btn btn-success">
						<i class="zmdi zmdi-format-list-bulleted" type="sumit" value=""></i> &nbsp; ADMINISTRADOR
					</a>
				</li>
			</ul>
		</div>
</form>
<?php

//primer paso
$consulta = "SELECT * FROM usuario";
//$consulta="SELECT * FROM ventas";
//segunda paso 
$respuesta = mysqli_query($conexion, $consulta);

// tercer paso
// 
while ($fila = mysqli_fetch_array($respuesta)) {

    //echo "el id del producto buscado es: ".$fila['id_producto'];
    //echo "Descripcion del producto buscado es: ".$fila['descrip_producto'];
?>
    
        <!-- Panel listado de busqueda de administradores -->
        <div class="container-fluid">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center">CI</th>
                                    <th scope="col" class="text-center">NOMBRE</th>
                                    <th scope="col" class="text-center">APELLIDO</th>
                                    <th scope="col" class="text-center">CONTRASEÑA</th>
                                    <th scope="col" class="text-center">EMAIL</th>
                                    <th scope="col" class="text-center">N°CELULAR</th>
                                    <th scope="col" class="text-center">DIRECCION</th>
                                    <th scope="col" class="text-center">ID SESION</th>
                                    <!--<th scope="col" class="text-center">MODIFICAR</th>
                                    <th scope="col" class="text-center">ELIMINAR</th> -->
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
                                        <!-- <td>
											<form action="ModiUsu.php" method="post">
												<input type="hidden" name="ci" value=" <?php echo $ci; ?> ">
												<input type="submit" name="btn3" value="MODIFICAR"  class="btn btn-success btn-raised btn-xs">	
											</form>
											</td> 
									<td><form action="../control/abm.php" method="post">
										<input type="hidden" name="ci" value="<?php echo $ci;?>">
										<input type="submit" name="btn1" value="ELIMINAR" class="btn btn-danger btn-raised btn-xs">	
										</form>
									</td> -->
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


<?php
}
?>
</body>
</html>