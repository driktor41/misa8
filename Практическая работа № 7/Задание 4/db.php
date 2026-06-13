<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";  // Имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
?>