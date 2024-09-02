<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Aquí puedes obtener los datos de los usuarios desde la base de datos o un array
$usuarios = [
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
    ['nombre' => 'Jared Buenrostro', 'email' => 'jared@gmail.com', 'telefono' => '+123 456 789', 'rol' => 'Diseñador', 'fecha_union' => '12-10-2014', 'salario' => '$1200'],
    ['nombre' => 'Marco Hernández', 'email' => 'markhe@gmail.com', 'telefono' => '+234 456 789', 'rol' => 'Desarrollador', 'fecha_union' => '10-09-2014', 'salario' => '$1800'],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios - iStrategy</title>
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="Elementos-iStrategy/LOGO-AVION-ROJO-iSTRATEGY.png" alt="iStrategy Logo">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscador...">
            </div>
        </header>
        
        <aside class="sidebar">
            <button class="add-contact">Agregar nuevo contacto</button>
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
                    <tbody>
                        <?php foreach ($usuarios as $index => $usuario): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $usuario['nombre']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php echo $usuario['telefono']; ?></td>
                            <td><span class="role-badge"><?php echo $usuario['rol']; ?></span></td>
                            <td><?php echo $usuario['fecha_union']; ?></td>
                            <td><?php echo $usuario['salario']; ?></td>
                            <td>
                                <button class="edit-btn">✎</button>
                                <button class="delete-btn">🗑️</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>

