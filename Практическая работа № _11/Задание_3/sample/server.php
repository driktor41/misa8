<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Безопасность данных, часть 2</h2>

    <?php
        $_ERROR = [];

        if (isset($_POST['load'])) {

            if (empty($_POST['login'])) {
                $_ERROR[] = "Поле Логин пустое";
            } else {
                $login = trim($_POST['login']);
                $login = filter_var($login, FILTER_SANITIZE_STRING);

                if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
                    $_ERROR[] = "Логин '$login' невалиден. Допустимы только латинские буквы и цифры (5-10 символов)";
                }
            }
            
            if (count($_ERROR) > 0) {
                echo "<h3>Ошибки валидации:</h3>";
                foreach ($_ERROR as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
                echo "<p><strong>Введённое значение:</strong> " . htmlspecialchars($_POST['login']) . "</p>";
            } else {
                echo "<h3 style='color: green;'>Форма успешно прошла валидацию!</h3>";
                echo "<p><strong>Очищенный логин:</strong> $login</p>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
        }
    ?>
    
</body>
</html>