<?php
$host = "localhost";
$user = "root";
$password = ""; // Ubah jika MySQL punya password
$database = "gemini_robotics";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
