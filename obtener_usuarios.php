<?php
include 'db_config.php';


$sql = "SELECT * FROM usuarios where deleted_at is null order by id desc";
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
