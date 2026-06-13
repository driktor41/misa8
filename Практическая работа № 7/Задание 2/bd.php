<?php
// bd.php
$host = 'MySQL-8.0';      // Именно так, как написано в phpMyAdmin
$user = 'root';           // Пользователь
$password = '';           // Пароль пустой
$database = 'test_db';    // Имя базы, которую только что создали

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>