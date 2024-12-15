<?php
require 'db.php';

// Datos del usuario administrador
$username = 'ranchapp';
$password = 'SVCI2024';

// Hashear la contraseña de forma segura
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->execute();
    echo "Usuario administrador creado con éxito.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
