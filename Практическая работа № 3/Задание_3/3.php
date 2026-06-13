<?php
// ассоциативный массив
$teacher = [
    'surname' => 'Лаврецкая',
    'name' => 'Елизавета',
    'patronymic' => 'Викторовна',
    'login' => 'elizaveta',
    'password' => '12345',
    'email' => 'lovel@mail.ru'
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Данные преподавателя</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .info-block {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
        }
        .info-item {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Информация о преподавателе</h2>
    <div class="info-block">
        <div class="info-item">
            <span class="label">Фамилия:</span> <?php echo $teacher['surname']; ?>
        </div>
        <div class="info-item">
            <span class="label">Имя:</span> <?php echo $teacher['name']; ?>
        </div>
        <div class="info-item">
            <span class="label">Отчество:</span> <?php echo $teacher['patronymic']; ?>
        </div>
        <div class="info-item">
            <span class="label">Логин:</span> <?php echo $teacher['login']; ?>
        </div>
        <div class="info-item">
            <span class="label">Пароль:</span> <?php echo $teacher['password']; ?>
        </div>
        <div class="info-item">
            <span class="label">Email:</span> <?php echo $teacher['email']; ?>
        </div>
    </div>
</body>
</html>
