<?php
// admin.php
include 'bd.php';
include 'header.php';

// Получение данных из БД (подготовленный запрос)
$sql = "SELECT id, username, email, created_at FROM users ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<h2>Административная панель</h2>
<p>Список пользователей</p>

<table class="table table-bordered table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Дата регистрации</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['created_at']) ?></td>
            <td>
                <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Редактировать</a>
                <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Удалить пользователя?')">Удалить</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>