<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <style>
        body { font-family: sans-serif; padding: 50px; }
        form { display: flex; flex-direction: column; width: 300px; gap: 10px; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Contacto</h1>

    <form action="/recibe-formulario" method="POST">
        @csrf 

        <label>Nombre:</label>
        <input type="text" name="nombre" required placeholder="Tu nombre">

        <label>Correo:</label>
        <input type="email" name="email" required placeholder="tu@email.com">

        <label>Mensaje:</label>
        <textarea name="mensaje" rows="4"></textarea>

        <button type="submit">Enviar formulario</button>
    </form>
</body>
</html>