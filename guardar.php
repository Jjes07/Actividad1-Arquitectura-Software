<?php
require_once "conexion.php";

$nombre = $_POST['nombre'] ?? null;

if (!$nombre) {
    header("Location: index.php");
    exit;
}

$conexion = conectar();

$sql = "INSERT INTO usuarios (nombre) VALUES (:nombre)";
$stmt = $conexion->prepare($sql);
$stmt->execute([':nombre' => $nombre]);

// Redirección segura (PRG)
header("Location: index.php?estado=ok");
exit;
