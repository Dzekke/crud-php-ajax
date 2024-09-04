<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - iStrategy</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body background="Elementos-iStrategy/FONDO.jpg">
    <div class="login-container">
        <div class="login-box">
            <h1>Iniciar sesión</h1>
            <p>Ingresa tus datos a continuación</p>
            <div id="error-message" class="error" style="display: none;"></div>
            <form id="login-form">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingrese el Correo" required>

                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Introduzca Contraseña" required>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Mantenerme Conectado</label>
                </div>

                <a href="#" class="forgot-password">¿Olvidaste la Contraseña?</a>

                <button type="submit" class="login-button">Iniciar Sesión</button>
                <a href="agregar_usuario.php" class="forgot-password">Crear cuenta</a>
            </form>
        </div>
    </div>

    <script src="js/login.js"> </script>
</body>
</html>
