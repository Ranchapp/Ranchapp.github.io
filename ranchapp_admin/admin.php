<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

    <p>Este es el panel de administración.</p>

    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
