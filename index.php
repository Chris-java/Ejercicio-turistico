<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personaliza tu paquete turístico</title>
    <style>
        body {
            margin: 0;
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
            padding: 16px;
            background: #f4a261;
            color: white;
            text-align: center;
        }

        form {
            width: 650px;
            margin: 25px auto;
            padding: 20px;
            border: 3px solid #f6bd60;
            background: #fffdf5;
        }

        h2 {
            color: #e76f51;
        }

        button {
            padding: 8px 14px;
            background: #e76f51;
            color: white;
            border: 0;
        }
    </style>
</head>
<body>
    <h1>Personaliza tu paquete turístico</h1>

    <form action="resultados.php" method="POST">
        <h2>Datos del cliente</h2>

        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>

        <h2>Destinos turísticos</h2>
        <select name="destinos[]" multiple size="7">
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select>

        <h2>Actividades turísticas</h2>
        <label><input type="checkbox" name="actividades[]" value="Buceo"> Buceo</label><br>
        <label><input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha</label><br>
        <label><input type="checkbox" name="actividades[]" value="Visita a zonas arqueológicas"> Visita a zonas arqueológicas</label><br>
        <label><input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo</label><br>
        <label><input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva</label><br>
        <label><input type="checkbox" name="actividades[]" value="Recorrido gastronómico"> Recorrido gastronómico</label><br>
        <label><input type="checkbox" name="actividades[]" value="Visita a museos"> Visita a museos</label>

        <h2>Servicios adicionales</h2>
        <label><input type="checkbox" name="servicios[]" value="Transporte al aeropuerto"> Transporte al aeropuerto</label><br>
        <label><input type="checkbox" name="servicios[]" value="Desayuno incluido"> Desayuno incluido</label><br>
        <label><input type="checkbox" name="servicios[]" value="Hospedaje de lujo"> Hospedaje de lujo</label><br>
        <label><input type="checkbox" name="servicios[]" value="Seguro de viajero"> Seguro de viajero</label><br>
        <label><input type="checkbox" name="servicios[]" value="Renta de automóvil"> Renta de automóvil</label><br>
        <label><input type="checkbox" name="servicios[]" value="Guía turístico"> Guía turístico</label>

        <br><br>
        <button type="submit">Generar paquete</button>
    </form>
</body>
</html>
