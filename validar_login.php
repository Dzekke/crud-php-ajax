<?php
session_start();

include 'db_config.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para obtener toda la información necesaria del usuario
    $query = "SELECT id, password, intentos, tiempo_block FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userId = $user['id'];

        // Verificar si la cuenta está bloqueada
        if ($user['intentos'] >= 3 && time() < strtotime($user['tiempo_block'])) {
            $timeRemaining = strtotime($user['tiempo_block']) - time();
            $response['message'] = "Cuenta bloqueada. Intenta de nuevo en $timeRemaining segundos.";
            echo json_encode($response);
            exit;
        }

        // Verificar la contraseña
        if (password_verify($password, $user['password'])) {
            resetLoginIntentos($userId);
            $_SESSION['user_id'] = $userId;
            $response['success'] = true;
        } else {
            incrementLoginIntentos($userId, $user['intentos']);
            if($user['intentos']==0){
                $user['intentos'] +=1;
            }
            $intestosValidos = 3 - $user['intentos'];
            
            $response['message'] = 'Contraseña incorrecta. Has realizado ' . $user['intentos'] . ' de 3 intentos permitidos. Quedan ' . $intestosValidos . ' intentos. Si llegas a 3 intentos fallidos, tu cuenta será bloqueada temporalmente por 10 minutos.';

        }
    } else {
        $response['message'] = 'Usuario no encontrado.';
    }

    $stmt->close();
} else {
    $response['message'] = 'Método de solicitud no permitido.';
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);

// Función para incrementar los intentos fallidos de inicio de sesión
function incrementLoginIntentos($userId, $intentosActules) {
    global $conn;
    $intentosReinicio = $intentosActules + 1;
    $blockTime = NULL;

    if ($intentosReinicio >= 3) {
        // Si los intentos alcanzan el límite, bloquear la cuenta por x minutos
        $blockTime = date("Y-m-d H:i:s", strtotime("+10 minutes"));
    }

    $stmt = $conn->prepare("UPDATE usuarios SET intentos = ?, tiempo_block = ? WHERE id = ?");
    $stmt->bind_param("isi", $intentosReinicio, $blockTime, $userId);
    $stmt->execute();
    $stmt->close();
}

// Función para restablecer los intentos de inicio de sesión fallidos
function resetLoginIntentos($userId) {
    global $conn;
    $stmt = $conn->prepare("UPDATE usuarios SET intentos = 0, tiempo_block = NULL WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->close();
}
?>
