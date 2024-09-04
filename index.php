<?php
include 'db_config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    
    header('Location: login.php');
    exit();
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios - iStrategy</title>
    <link rel="stylesheet" href="css/crud.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo-container">
                <div class="logo">
                    <img src="Elementos-iStrategy/LOGO-AVION-ROJO-iSTRATEGY.png"  alt="iStrategy Logo">
                </div>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscador..." id="search-bar">
            </div>
        </header>
        
        <aside class="sidebar">
            <a href="agregar_usuario.php"><button class="add-contact">Agregar nuevo contacto</button></a>
            <ul>
                <li>Trabajo <span class="badge">10</span></li>
                <li>Diseño <span class="badge">28</span></li>
                <li>Familia <span class="badge">5</span></li>
                <li>Amigos <span class="badge">8</span></li>
                <li>Oficina <span class="badge">2</span></li>
            </ul>
            <button class="create-label">+ Crear nueva etiqueta</button>
        </aside>

        <main class="content">
            <div class="table-container"> 
                 <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Rol</th>
                            <th>Fecha de Unión</th>
                            <th>Salario</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody id="user-table-body">
                        <!-- Aquí se mostraran los usuarios con AJAX -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
<script src="js/home.js"> </script>
</body>
</html>
