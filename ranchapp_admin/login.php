<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="css-admin/style.css">
    <title>Login</title>
</head>
<body >
    
    <h1 id="h1-login">Login</h1>
    <form action="authenticate.php" method="POST">
        <label for="username">Usuario</label>
        <br>
        <input type="text" id="username" name="username" required placeholder="ingrese su usuario">
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" id="password" name="password" required placeholder="ingrese su contraseña">
        <br>
=======
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="authenticate.php" method="POST">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>

>>>>>>> 1830fe24820a8aa23905bf79b9d0c16fecbebbf7
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
