<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Iniciar la sesión
        $_SESSION['username'] = $user['username'];
        header('Location: admin.php');
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
