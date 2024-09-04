<?php
include 'db_config.php';

$id = $_GET['id'];
$id = intval($id);


$sql = "SELECT * FROM usuarios where id = $id and deleted_at is null";
$result = $conn->query($sql);

$usuarios = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

echo json_encode(['users' => $usuarios]);

$conn->close();
?>
