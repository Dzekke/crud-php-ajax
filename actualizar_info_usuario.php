<?php
session_start();

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include('db_config.php');
    $username = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $id = $_POST['id'];
    $id = intval($id);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "UPDATE usuarios SET nombre = ?, email = ?, password = ?, genero = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssssi', $username, $email, $hashedPassword,$gender,$id);

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
