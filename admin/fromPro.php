<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Producto</title>
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
            background-color: #45a049;
            padding: 10px 40px 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h3 {
            text-align: center;
            color: white;
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
            color: #f0f0f0;
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

        @media (max-width: 1024px) {
            .container {
                max-width: 90%;
            }

            .form-group {
                width: 100%;
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
        <h3>FORMULARIO DE REGISTRO DE PRODUCTO</h3>
        <form action="../control/abm.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label" for="id_producto">Código de Producto:</label>
                    <input type="number" name="id_producto" id="id_producto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="color">Color:</label>
                    <input type="text" name="color" id="color" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="talla">Talla:</label>
                    <input type="number" name="talla" id="talla" class="form-control" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label" for="descrip_producto">Descripción de Producto:</label>
                    <input type="text" name="descrip_producto" id="descrip_producto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="precio_unitario">Precio Unitario:</label>
                    <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label" for="id_marca">Marca:</label>
                    <select name="id_marca" id="id_marca" class="form-control">
                        <option value="1">Nike</option>
                        <option value="2">Adidas</option>
                        <option value="3">Puma</option>
                        <option value="4">Reebok</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="btn4" value="REGISTRAR" class="btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
