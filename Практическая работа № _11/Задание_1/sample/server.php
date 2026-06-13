<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Безопасность данных, часть 1</h2>
    
    <?php
        $errors = array();

        if (isset($_POST['login']) || isset($_POST['email']) || isset($_POST['pwd'])) {

            if (empty($_POST['login'])) {
                $errors[] = "Не заполнено поле Логин";
            } else {
                $login = strip_tags($_POST['login']);
                if (!preg_match('/^[a-zA-Z0-9]{5,10}$/u', $login)) {
                    $errors[] = "$login - невалидный логин";
                }
            }
            
            if (empty($_POST['email'])) {
                $errors[] = "Не заполнено поле E-mail";
            } else {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                // валидация email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = "$email - невалидный адрес";
                }
            }

            if (empty($_POST['pwd'])) {
                $errors[] = "Не заполнено поле Пароль";
            } else {
                $pwd = strip_tags($_POST['pwd']);
                if (!preg_match('/^[0-9a-zA-Z!@#$%^&*]{6,15}$/', $pwd)) {
                    $errors[] = "Пароль не соответствует требованиям";
                }
            }
            
            if (count($errors) > 0) {
                echo "<h3>Ошибки валидации:</h3>";
                echo "<pre>";
                print_r($errors);
                echo "</pre>";
            } else {
                echo "<h3 style='color: green;'>Форма успешно прошла валидацию!</h3>";
                echo "<p><strong>Логин:</strong> $login</p>";
                echo "<p><strong>E-mail:</strong> $email</p>";
                echo "<p><strong>Пароль:</strong> $pwd</p>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
        }
    ?>  
    
</body>
</html>