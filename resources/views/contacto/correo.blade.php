<!-- resources/views/emails/mensaje.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje recibido para Yilsau</title>
</head>
<body>
    <h1>Nuevo mensaje recibido para Yilsau</h1>
    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Teléfono:</strong> {{ $telefono }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $mensaje }}</p>
</body>
</html>
