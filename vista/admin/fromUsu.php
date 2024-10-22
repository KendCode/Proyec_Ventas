<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro Usuario</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			margin: 0;
			padding: 20px;
		}

		.container {
			background-color: wheat;
			padding: 10px 40px 20px 30px;
			border-radius: 8px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 600px;
		}

		h3 {
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}

		.form-row {
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
		}

		.form-group {
			width: 48%;
			margin-bottom: 20px;
		}

		.form-group.full-width {
			width: 100%;
		}

		.form-label {
			display: block;
			margin-bottom: 5px;
			color: #666;
		}

		.form-control {
			width: 100%;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 4px;
			font-size: 16px;
		}

		.form-control:focus {
			outline: none;
			border-color: #4CAF50;
		}

		.btn-primary {
			width: 100%;
			padding: 10px;
			background-color: black;
			color: white;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		.btn-primary:hover {
			background-color: #45a049;
		}

		.error {
			color: red;
			font-size: 14px;
			margin-top: 5px;
		}

		/* Media queries para mejorar la adaptabilidad */
		@media (max-width: 1024px) {
			.container {
				max-width: 90%;
			}

			.form-group {
				width: 100%;
				/* Ocupa el 100% en tablets */
			}
		}

		@media (max-width: 768px) {
			body {
				padding: 10px;
			}

			.container {
				padding: 10px 20px;
				max-width: 100%;
			}

			.form-row {
				flex-direction: column;
			}

			.form-group {
				width: 100%;
				/* Asegura que en pantallas más pequeñas, los campos ocupen el ancho completo */
			}
		}

		@media (max-width: 480px) {
			.container {
				padding: 10px 15px;
				border-radius: 5px;
			}

			h3 {
				font-size: 18px;
			}

			.form-control {
				font-size: 14px;
				padding: 8px;
				/* Ajusta el tamaño de los campos para pantallas más pequeñas */
			}

			.btn-primary {
				font-size: 14px;
				padding: 10px;
			}
		}

		@media (max-width: 360px) {
			body {
				padding: 5px;
			}

			.container {
				padding: 5px 10px;
			}

			h3 {
				font-size: 16px;
			}

			.form-control {
				font-size: 12px;
				padding: 6px;
			}

			.btn-primary {
				font-size: 12px;
				padding: 8px;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<h3>FORMULARIO DE REGISTRO USUARIO</h3>
		<form id="registroForm" action="../control/abm.php" method="post" enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group">
					<label class="form-label" for="ci">CI:</label>
					<input type="number" name="ci" id="ci" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="nombre">Nombre:</label>
					<input type="text" name="nombre" id="nombre" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="apellido">Apellido:</label>
					<input type="text" name="apellido" id="apellido" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="password">Contraseña:</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label class="form-label" for="nro_celular">Celular:</label>
					<input type="tel" name="nro_celular" id="nro_celular" class="form-control" required>
				</div>
				<div class="form-group full-width">
					<label class="form-label" for="direccion">Dirección:</label>
					<input type="text" name="direccion" id="direccion" class="form-control">
				</div>
				<div class="form-group full-width">
					<label class="form-label" for="id_sesion">Rol</label>
					<select name="id_sesion" id="id_sesion" class="form-control">
						<option value="5">Cliente</option>
						<option value="4">Empleado</option>
						<option value="3">Tecnico</option>
						<option value="2">Administrador</option>
						<option value="1">Gerente</option>
					</select>
				</div>
				<!-- <br> FOTOGRAFIA
<input type="file" name="archivo"> -->
			</div>
			<div class="form-group">
				<input type="submit" name="agregar" value="REGISTRAR" class="btn-primary">
			</div>
		</form>
	</div>

	<script>
		document.getElementById('registroForm').addEventListener('submit', function(event) {
			var isValid = true;
			var inputs = this.querySelectorAll('input[required]');

			inputs.forEach(function(input) {
				if (!input.value.trim()) {
					isValid = false;
					var error = input.parentNode.querySelector('.error');
					if (!error) {
						error = document.createElement('div');
						error.className = 'error';
						input.parentNode.appendChild(error);
					}
					error.textContent = 'Este campo es requerido';
				} else {
					var error = input.parentNode.querySelector('.error');
					if (error) {
						error.remove();
					}
				}
			});

			if (!isValid) {
				event.preventDefault();
			}
		});
	</script>
</body>

</html>