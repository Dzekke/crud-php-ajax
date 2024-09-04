<?php
session_start();

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include('db_config.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

   
    $query = "INSERT INTO usuarios (nombre, email, password, genero) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssss', $username, $email, $hashedPassword, $gender);

    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $response['success'] = false;
        $response['message'] = 'Error al registrar el usuario: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    $response['success'] = false;
    $response['message'] = 'Método no permitido';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
