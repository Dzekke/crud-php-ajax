<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - iStrategy</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    session_start();

    // Si la sesión está activa, redirigir a la página principal (lista de usuarios)
    if (isset($_SESSION['user_id'])) {
        header('Location: index.php');
        exit();
    }

    $error = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Aquí debería estar la lógica para validar el usuario y la contraseña
        // Ejemplo simple:
        if ($email === 'admin@istrategy.com' && $password === 'password') {
            $_SESSION['user_id'] = 1;  // ID de usuario simulado
            header('Location: index.php');
            exit();
        } else {
            $error = 'Correo o contraseña incorrectos.';
        }
    }
    ?>

    <div class="login-container">
        <div class="login-box">
            <h1>Iniciar sesión</h1>
            <p>Ingresa tus datos a continuación</p>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="post" action="">
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
            </form>
        </div>
    </div>
</body>
</html>
