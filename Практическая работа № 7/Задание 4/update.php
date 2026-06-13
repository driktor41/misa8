<?php
include 'db.php';

// === ОБРАБОТЧИК ОБНОВЛЕНИЯ ===
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Успешно!'); window.location.href='admin.php';</script>";
        exit;
    } else {
        echo "Ошибка: " . $stmt->error;
    }
    $stmt->close();
}

// === ПОЛУЧАЕМ ДАННЫЕ ПОЛЬЗОВАТЕЛЯ ДЛЯ ФОРМЫ ===
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT id, name, email FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}

if (!$user) {
    die("Пользователь не найден");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Редактирование пользователя: <?= htmlspecialchars($user['name']) ?></h2>
    
    <form method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <div class="mb-3">
            <label>Имя</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        
        <button type="submit" name="update_user" class="btn btn-primary">Сохранить</button>
        <a href="admin.php" class="btn btn-secondary">Отмена</a>
    </form>
</body>
</html>