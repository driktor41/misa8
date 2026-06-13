<?php
// edit.php
include 'bd.php';
include 'header.php';

$id = $_GET['id'] ?? 0;
$user = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("UPDATE users SET username=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $username, $email, $id);
    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    }
    $stmt->close();
} else {
    $stmt = $conn->prepare("SELECT id, username, email FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
    if (!$user) {
        echo "<p>Пользователь не найден</p>";
        include 'footer.php';
        exit;
    }
}
?>

<h2>Редактирование пользователя</h2>
<form method="post">
    <div class="mb-3">
        <label>Имя пользователя</label>
        <input type="text" name="username" class="form-control" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
    <a href="admin.php" class="btn btn-secondary">Отмена</a>
</form>

<?php include 'footer.php'; ?>