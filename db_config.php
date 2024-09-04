<?php
$servername = "localhost";  
$username = "dev";
$password = "12345";
$dbname = "usuarios";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
