<?php

include("conexion/conexion.php");
session_start();

//include("bloqueo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .vh-100 {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(146, 154, 97)
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-outline {
            position: relative;
        }
        .form-outline input {
            border-radius: 0.5rem;
        }
        .form-outline label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 0.75rem 1rem;
            transition: all 0.2s;
        }
        .form-outline input:focus + label,
        .form-outline input:not(:placeholder-shown) + label {
            transform: translateY(-150%);
            background: #fff;
            padding: 0 0.5rem;
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../proyecDos/img/Kender.png"
                                     alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="control/control.php" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Inicia Sesion</span>
                                        </div>
                                        <br>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder=" " name="nombre" />
                                            <label class="form-label" for="form2Example17">Usuario</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder=" "  name="contrasena"/>
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" value="ingresar">Login</button>
                                        </div>
                                        <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                                            style="color: #393f81;">Register here</a></p> -->
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
