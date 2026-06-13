<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация пользователей</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"> <!-- Пункт 1.1 -->
</head>
<body>
    <header><nav class="navbar navbar-expand-lg bg-primary navbar-dark"><div class="container-fluid"><a class="navbar-brand" href="#">Регистрация</a></div></nav></header>

    <section class="container mt-4">
        <h2 class="text-center">Регистрация</h2>
        <form action="" method="post" class="w-50 mx-auto border p-4 rounded">
            <div class="mb-3"><label>Имя</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label>Логин</label><input type="text" name="login" class="form-control" required></div>
            <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
            <div class="mb-3"><label>Пароль</label><input type="password" name="password" class="form-control" required></div>
            <button type="submit" name="submit" class="btn btn-success w-100">Зарегистрироваться</button>
        </form>
    </section>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Подключение (пункты 13-15)
        $connect = new mysqli("localhost", "root", "", "имя_вашей_базы");
        if ($connect->connect_error) die("Ошибка: " . $connect->connect_error);

        $name = $connect->real_escape_string($_POST['name']);
        $login = $connect->real_escape_string($_POST['login']);
        $email = $connect->real_escape_string($_POST['email']);
        $password = $connect->real_escape_string($_POST['password']);

        $sql = "INSERT INTO users (name, login, email, password) VALUES ('$name', '$login', '$email', '$password')";
        
        if ($connect->query($sql)) echo "<div class='alert alert-success mt-3 text-center'>Успешно!</div>";
        else echo "<div class='alert alert-danger mt-3 text-center'>Ошибка: " . $connect->error . "</div>";
        $connect->close();
    }
    ?>
</body>
</html>
