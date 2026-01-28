<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="card">

<?php if (isset($_GET['estado'])): ?>

    <?php if ($_GET['estado'] === 'ok'): ?>
        <h2>Guardado correctamente</h2>

    <?php elseif ($_GET['estado'] === 'fail'): ?>
        <h2>Error al guardar</h2>
        <p>Inténtalo nuevamente.</p>

    <?php else: ?>
        <h2>Datos inválidos</h2>

    <?php endif; ?>

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
