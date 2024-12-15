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
<body id="panel_admin_body">
    
    <header>
        <h1>Bienvenido al Panel de Administrador</h1>
    </header>

    <div class="dashboard-container">
        <div class="card">
            <h2>Gestión de Usuarios</h2>
            <p>Administra los usuarios y permisos.</p>
            <button><a href="#">Usuarios</a></button>
        </div>

        <div class="card">
            <h2>Reportes</h2>
            <p>Consulta estadísticas del sistema.</p>
            <button><a href="#">Metricas</a></button>
        </div>

        <div class="card">
            <h2>Configuraciones</h2>
            <p>Gestionar eventos de la base de datos</p>
            <button><a href="#">Eventos</a></button>
        </div>

        <div class="card">
            <h2>Cerrar Sesión</h2>
            <p>Finalizar la sesión</p>
            <button><a href="logout.php">Cerrar sesión</a></button>
        </div>
    </div>

</body>
</html>
