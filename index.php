<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="card">

<?php if (isset($_GET['estado']) && $_GET['estado'] === 'ok'): ?>

    <h2>Guardado correctamente</h2>
    <p>Tu nombre fue almacenado en la base de datos.</p>

    <a href="index.php" class="btn">Volver</a>

<?php else: ?>

    <h2>Ingresa tu nombre</h2>

    <form action="guardar.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <button type="submit" class="btn">Guardar</button>
    </form>

<?php endif; ?>

</div>

</body>
</html>
