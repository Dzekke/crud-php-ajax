

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/usuario.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
            <a href="index.php"><img src="Elementos-iStrategy/avion.png" alt="Logo" class="logo-icon"></a>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.mx/iStrategy"><img src="Elementos-iStrategy/redes 1.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/istrategymexico/"><img src="Elementos-iStrategy/redes 2.png" alt="Instagram"></a>
                <a href="https://www.tiktok.com/@istrategymx"><img src="Elementos-iStrategy/redes 3.png" alt="TikTok"></a>
            </div>
        </aside>

        <main class="main-content">
            <div class="form-section">
            <form id="registroForm" class="form">
                <h1>Registro</h1>
                
                <label for="username">User Name*</label>
                <div class="input-label">
                    <div class="input-icon">
                        <img src="Elementos-iStrategy/ICONO 1.png" alt="Usuario">
                    </div>
                    <input type="text" id="username" name="username" placeholder="Enter your Username">
                </div>
                
                <label for="email">Email Address*</label>
                <div class="input-label">
                    <div class="input-icon">
                        <img src="Elementos-iStrategy/ICONO 2.png" alt="Email">
                    </div>
                    <input type="email" id="email" name="email" placeholder="Enter Email">
                </div>
                
                <label for="password">Password*</label>
                <div class="input-label">
                    <div class="input-icon">
                        <img src="Elementos-iStrategy/ICONO 3.png" alt="Contraseña">
                    </div>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>

                <label for="confirm-password">Confirm Password*</label>
                <div class="input-label">
                    <div class="input-icon">
                        <img src="Elementos-iStrategy/ICONO 4.png" alt="Confirmar Contraseña">
                    </div>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Enter your password again">
                </div>

                <div>
                <input type="checkbox" id="showPassword"> Mostrar contraseña
                </div>
                
                <div class="gender">
                    <label for="gender">Género</label>
                    <label><input type="radio" name="gender" value="masculino"> Masculino</label>
                    <label><input type="radio" name="gender" value="femenino"> Femenino</label>
                </div>

                <label class="remember">
                    <input type="checkbox" name="remember"> Recordarme siempre
                </label>
                
                <div class="buttons">
                    <button type="submit">Submit</button>
                    <a href="index.php"><button type="button">Cancel</button></a>
                </div>
            </form>

        </div>
        <div class="image-section">
            <div class="background">
                <img src="Elementos-iStrategy/FONDO.jpg" alt="Background Image">
                <div class="overlay">
                    <img src="Elementos-iStrategy/main 2 (foto).png" alt="iSTRATEGY Logo">
                </div>
            </div>
        </div>
   </main>

    </div>
    <script src="js/usuario_nuevo.js"></script>


</body>
</html>
