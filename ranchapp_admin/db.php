<?php
// Datos de la conexión
$host = 'localhost';
$dbname = 'c2730826_ranchap';
$username = 'c2730826_ranchap'; // Cambia esto por tu usuario de MySQL
$password = 'neBA54wile'; // Cambia esto por tu contraseña de MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
?>
