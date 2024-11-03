<?php
include("../modelo/conexion/conexion.php");

if (isset($_GET['id_producto'])) {
    $id_producto = $_GET['id_producto'];

    // Consulta SQL para obtener la información del producto
    $query = "SELECT * FROM producto WHERE id_producto = '$id_producto'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
    } else {
        echo "Producto no encontrado.";
        exit();
    }
} else {
    echo "ID de producto no especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detalle del Producto</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/principal.css" rel="stylesheet">
    <link href="../assets/css/ventas.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="principal.php">Volver a la tienda</a>
        </div>
    </nav>

    <!-- Product Detail Section -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="../assets/img/tenis/img1.jpg?php echo $producto['imagen']; ?>" alt="Producto">
                </div>
                <!-- Product Details -->
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder"><?php echo $producto['descrip_producto']; ?></h1>
                    <div class="fs-5 mb-3">
                        <span>Precio: <?php echo $producto['precio_unitario']; ?> Bs.</span>
                    </div>
                    <p class="lead">Talla:<?php echo $producto['talla']; ?></p>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $id_producto; ?>">
                        <input type="submit" name="btn_add_to_cart" class="btn btn-outline-dark mt-auto" value="Añadir al carrito">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
