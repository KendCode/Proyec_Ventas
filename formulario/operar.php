<?php

    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $intereses = isset($_POST['intereses']) ? implode(', ', $_POST['intereses']) : '';
    //$archivo = $_FILES['name'];
    $archivo = $_POST['file'];
    $secreto = $_POST['secreto'];
    $contrasena = $_POST['contrasena'];
    $pais = $_POST['paises'];
    $fruta = isset($_POST['frutas']) ? implode(', ', $_POST['frutas']) : '';
    $comentarios = $_POST['comentarios'];


    echo "Datos recibidos:<br>";
    echo "Nombre: $nombre <br>";
    echo "Género: $genero <br>";
    echo "Intereses: $intereses <br>";
    echo "Archivo: $archivo <br>";
    echo "Secreto: $secreto <br>";
    echo "Contraseña: $contrasena <br>";
    echo "País: $pais <br>";
    echo "Frutas: $fruta <br>";
    echo "Comentarios: $comentarios <br>";

?>