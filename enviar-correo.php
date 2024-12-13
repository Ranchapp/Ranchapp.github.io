<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['honeypot'])) {
        die("Acceso denegado.");
    }

    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    if (empty($nombre) || !$email || empty($telefono) || empty($mensaje)) {
        http_response_code(400);
        echo "Todos los campos son obligatorios.";
        exit;
    }

    $to = 'contacto@ranchapp.com.ar'; // Reemplaza por tu correo
    $subject = 'Nuevo mensaje de contacto';
    $body = "
    <h1>Nuevo mensaje de contacto</h1>
    <p><strong>Nombre:</strong> $nombre</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Teléfono:</strong> $telefono</p>
    <p><strong>Mensaje:</strong> $mensaje</p>
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Mensaje enviado con éxito.";
    } else {
        http_response_code(500);
        echo "No se pudo enviar el mensaje.";
    }
} else {
    http_response_code(403);
    echo "Acceso denegado.";
}
?>
