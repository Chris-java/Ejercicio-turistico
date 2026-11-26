<!DOCTYPE>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen del paquete turístico</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background-image: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=85");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        h1,
        h2 {
            font-family: Georgia, "Times New Roman", serif;
            font-style: italic;
        }

        h1 {
            margin: 0;
            padding: 18px;
            background: #f4a261;
            color: white;
            text-align: center;
        }

        .resumen {
            max-width: 650px;
            margin: 30px auto;
            padding: 25px;
            border: 3px solid #f6bd60;
            border-radius: 10px;
            background: #fffdf5;
        }

        h2 {
            color: #e76f51;
            border-bottom: 1px solid #f6bd60;
            padding-bottom: 5px;
        }

        a {
            color: #e76f51;
        }
    </style>
</head>
<body>
    <h1>Resumen de tu paquete turístico</h1>

    <div class="resumen">
    <?php
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $destinos = $_POST['destinos'] ?? [];
    $actividades = $_POST['actividades'] ?? [];
    $servicios = $_POST['servicios'] ?? [];

    echo '<p><strong>Nombre:</strong> ' . htmlspecialchars($nombre) . '</p>';
    echo '<p><strong>Correo electrónico:</strong> ' . htmlspecialchars($correo) . '</p>';

    echo '<h2>Destinos seleccionados</h2>';
    if (count($destinos) === 0) {
        echo '<p>No seleccionaste ningún elemento</p>';
    } else {
        echo '<ul>';
        foreach ($destinos as $destino) {
            echo '<li>' . htmlspecialchars($destino) . '</li>';
        }
        echo '</ul>';
    }
    echo '<p>Total de destinos: ' . count($destinos) . '</p>';

    echo '<h2>Actividades seleccionadas</h2>';
    if (count($actividades) === 0) {
        echo '<p>No seleccionaste ningún elemento</p>';
    } else {
        echo '<ul>';
        foreach ($actividades as $actividad) {
            echo '<li>' . htmlspecialchars($actividad) . '</li>';
        }
        echo '</ul>';
    }
    echo '<p>Total de actividades: ' . count($actividades) . '</p>';

    echo '<h2>Servicios adicionales seleccionados</h2>';
    if (count($servicios) === 0) {
        echo '<p>No seleccionaste ningún elemento</p>';
    } else {
        echo '<ul>';
        foreach ($servicios as $servicio) {
            echo '<li>' . htmlspecialchars($servicio) . '</li>';
        }
        echo '</ul>';
    }
    echo '<p>Total de servicios adicionales: ' . count($servicios) . '</p>';

    $totalGeneral = count($destinos) + count($actividades) + count($servicios);
    echo '<h2>Total general</h2>';
    echo '<p><strong>Total de elementos seleccionados:</strong> ' . $totalGeneral . '</p>';
    ?>

    <p><a href="index.php">Crear otro paquete</a></p>
    </div>
</body>
</html>
