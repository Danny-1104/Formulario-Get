<?php
if ($_GET) {
    $nombre = $_GET['nombre'];
    $descripcion = $_GET['descripcion'];
    $provincia = $_GET['provincia'];
    $tipo = $_GET['tipo'];
    $servicios = isset($_GET['servicios']) ? implode(", ", $_GET['servicios']) : "Ninguno";
    $correo = $_GET['correo'];
    $fecha = $_GET['fecha'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado GET</title>
    <style>
        body { font-family: Arial; background: #f0f8ff; padding: 30px; }
        .resultado {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            width: 60%;
            margin: auto;
        }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Datos recibidos por GET</h2>
        <p><strong>Nombre:</strong> <?= $nombre ?></p>
        <p><strong>Descripción:</strong> <?= $descripcion ?></p>
        <p><strong>Provincia:</strong> <?= $provincia ?></p>
        <p><strong>Tipo de turismo:</strong> <?= $tipo ?></p>
        <p><strong>Servicios:</strong> <?= $servicios ?></p>
        <p><strong>Correo:</strong> <?= $correo ?></p>
        <p><strong>Fecha:</strong> <?= $fecha ?></p>
    </div>
</body>
</html>
