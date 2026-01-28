<?php
require_once "conexion.php";

$nombre = $_POST['nombre'] ?? null;

if (!$nombre) {
    header("Location: index.php?estado=error");
    exit;
}

try {
    $conexion = conectar();

    $sql = "INSERT INTO usuarios (nombre) VALUES (:nombre)";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([':nombre' => $nombre]);

    header("Location: index.php?estado=ok");
} catch (Exception $e) {
    header("Location: index.php?estado=fail");
}
exit;
