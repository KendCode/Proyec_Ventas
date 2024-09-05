<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ventas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/principal.css" rel="stylesheet" />
    <link href="css/ventas.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                    <form class="d-flex" method="post" action="registro.php">
                        <input type="submit" value="compras">
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
                session_start();
                // Mostrar mensaje de bienvenida si hay un usuario en sesión
                if (isset($_SESSION['usuario'])) {
                    echo '<h1><strong>Bienvenido ' . htmlspecialchars($_SESSION['usuario']) . '</strong></h1>';
                } else {
                    echo '<h1><strong>Bienvenido Invitado</strong></h1>';
                }

                include(__DIR__ . '../bloqueo.php');
                //include("/../bloqueo.php");
                ?>
                <h1 class="display-4 fw-bolder"></h1>
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
                        <img class="card-img-top" src="img/header-bg.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">

                                <form method="post" action="../registro.php">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img1.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img2.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img3.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews -->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price -->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="../registro.php">
                                    <!-- Hidden Checkbox -->
                                    <input type="checkbox" name="producto[]" value="tenis1" id="tenis1" style="display:none;" onclick="addToCart()">
                                    <!-- Custom Button -->
                                    <label for="tenis1" class="btn btn-outline-dark mt-auto">
                                        Tenis 1
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge -->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img4.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price -->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Sale Item">
                                    <input type="hidden" name="product_price" value="25.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img5.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img6.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image -->
                        <img class="card-img-top" src="img/tenis/img7.jpg" alt="..." />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name -->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price -->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post" action="registro.php">
                                    <input type="hidden" name="product_name" value="Fancy Product">
                                    <input type="hidden" name="product_price" value="120.00">
                                    <button class="btn btn-outline-dark mt-auto" type="button" name="add_to_cart" onclick="addToCart()">View options</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
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