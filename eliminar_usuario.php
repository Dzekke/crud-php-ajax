<?php
session_start();

header('Content-Type: application/json');

$response = [];

if (!isset($_SESSION['user_id'])) {
    $response['success'] = false;
    $response['message'] = 'No has iniciado sesión';
    echo json_encode($response);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('db_config.php');
    
    $id = $_POST['id'];
    $id = intval($id);
    //var_dump($id);
   
    if (!empty($id) && is_numeric($id)) {
        $query = "UPDATE  usuarios set deleted_at = NOW() where id = ?";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param('i', $id);

            if ($stmt->execute()) {
                $response['success'] = true;
            } else {
                $response['success'] = false;
                $response['message'] = 'Error al eliminar el usuario: ' . $stmt->error;
            }

            $stmt->close();
        } else {
            $response['success'] = false;
            $response['message'] = 'Error al preparar la consulta: ' . $conn->error;
        }

        $conn->close();
    } else {
        $response['success'] = false;
        $response['message'] = 'ID de usuario inválido';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Método no permitido';
}

echo json_encode($response);
?>
