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
    <link rel="stylesheet" href="css-admin/style.css">
    <title>Panel de Administración</title>
</head>
<body>
    <h1>Bienvenido <br> Este es el panel de administración  de <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

    <p id="NosEncDes">Nos encontramos desarrollandolo</p>

    <a id="cerrar_sesion" href="logout.php">Cerrar sesión</a>
</body>
</html>
