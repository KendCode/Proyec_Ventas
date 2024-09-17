<?php
session_start();
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
        <a href="index.php">Seguir Comprando</a>
    </header>

    <div class="carrito">
        <?php if (empty($carrito)): ?>
            <p>Tu carrito está vacío</p>
        <?php else: ?>
            <ul>
                <?php foreach ($carrito as $item): ?>
                    <li><?php echo $item['nombre']; ?> - $<?php echo $item['precio']; ?></li>
                    <?php $total += $item['precio']; ?>
                <?php endforeach; ?>
            </ul>
            <h3>Total: $<?php echo $total; ?></h3>
        <?php endif; ?>
    </div>
</body>
</html>
