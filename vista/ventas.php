<?php

include("../modelo/conexion/conexion.php");
//include("bloqueo.php"); 
// Desactivar la visualización de errores
//ini_set('display_errors', 0);
//error_reporting(0);
//include("destroy.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ventas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/css/principal.css" rel="stylesheet" />
    <link href="../assets/css/ventas.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="principal.php"><img src="../assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                    <form class="d-flex" method="post" action="registro.php">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Compras
                            <span id="cart-count" class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <?php
                session_start(); // Asegúrate de tener esto al inicio
                if (isset($_SESSION['cli'])) {
                    echo "<h1 class='display-4 fw-bolder'>" . $_SESSION['cli'] . "</h1>";
                } else {
                    echo "<h1 class='display-4 fw-bolder'>No hay cliente registrado" . $_SESSION['cli'] . "</h1>";
                }
                ?>
                <p class="lead fw-normal text-white-50 mb-0">Elige los productos que desees</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <!-- Producto 1 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/header-bg.jpg" alt="..." />
                        <!-- Product detalles -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto -->
                                <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 1"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>

                            </div>
                        </div>
                        <?php
                                    }        
                                ?>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img1.jpg" alt="..." />
                        <!-- Product detalles -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                 <!-- Nombre del producto -->
                                 <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 4"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>

                            </div>
                        </div>
                        <?php
                            }        
                        ?>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img2.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                               <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 2"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                                

                            </div>
                        </div>
                        
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div> 
                        <?php
                                    }
                                    ?>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img3.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 5"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div> 
                        <?php
                                    }
                                    ?>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img4.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 6"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div>
                        <?php
                                    }
                        ?>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img5.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                               <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 7"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img6.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 8"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="../assets/img/tenis/img7.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto -->
                               <?php
                                    $consulta = "SELECT * FROM producto WHERE id_producto = 9"; // Cambia '1' por el ID que deseas.

                                    //$consulta = "SELECT * FROM producto";
                                    //segunda paso 
                                    $respuesta = mysqli_query($conexion, $consulta);
                                    
                                    // tercer paso
                                    // 
                                    while ($fila = mysqli_fetch_array($respuesta)) {
                                ?>
                                    <h6 class="fw-bolder"><?php echo $fila['color']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['descrip_producto']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['talla']; ?></h6>
                                    <h6 class="fw_bolder"><?php echo $fila['precio_unitario']; ?></h6>
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detalle_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">Comprar</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Kender Mendoza 2024</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- JavaScript para incrementar el contador del carrito -->
    <script>
        /*let cartCount = 0;

        function addToCart() {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
        }*/
        let cartCount = 0;

        function addToCart(productName) {
            cartCount++;
            document.getElementById('cart-count').textContent = cartCount;
            const input = document.getElementById(productName);
            input.checked = true;
        }
    </script>
</body>

</html>