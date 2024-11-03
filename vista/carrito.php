<?php
session_start();
include("../modelo/conexion/conexion.php");
require_once('../modelo/libreria/tcpdf.php'); // Asegúrate de que la ruta a TCPDF sea correcta

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Añadir un producto al carrito
if (isset($_POST['btn_add_to_cart'])) {
    $id_producto = $_POST['id_producto'];

    // Aquí puedes consultar la base de datos para obtener detalles del producto
    $query = "SELECT * FROM producto WHERE id_producto = '$id_producto'";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
        $_SESSION['carrito'][$id_producto] = $producto; // Guardar detalles del producto en el carrito

        // Generar el recibo en PDF
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Tu Tienda');
        $pdf->SetTitle('Recibo de Compra');

        // Establecer la página
        $pdf->AddPage();

        // Contenido del recibo
        $html = '<h1>Recibo de Compra</h1>';
        $html .= '<p>Producto: ' . $producto['descrip_producto'] . '</p>';
        $html .= '<p>Precio: ' . $producto['precio_unitario'] . ' Bs.</p>';
        $html .= '<p>Talla: ' . $producto['talla'] . '</p>';
        $html .= '<p>Color: ' . $producto['color'] . '</p>';
        $html .= '<p>Gracias por tu compra!</p>';

        $pdf->writeHTML($html, true, false, true, false, '');

        // Salvar el PDF en un archivo
        $pdf_file = 'recibo_' . $id_producto . '.pdf';
        $pdf->Output($pdf_file, 'D'); // 'D' para forzar la descarga del PDF
        exit(); // Terminar el script después de generar el PDF
    } else {
        echo "Producto no encontrado.";
        exit();
    }
}
?>