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
        $_ERROR["valid"] = [];
        $_ERROR["empty"] = [];

        if (isset($_POST['login']) || isset($_POST['email']) || isset($_POST['pwd'])) {

            if (empty($_POST['login'])) {
                $_ERROR["empty"][] = "Не заполнено поле Логин";
            } else {

                $login = strip_tags($_POST['login']);
                if (!preg_match('/^[a-zA-Z0-9]{5,10}$/u', $login)) {
                    $_ERROR["valid"][] = "$login - невалидный логин";
                }
            }

            if (empty($_POST['email'])) {
                $_ERROR["empty"][] = "Не заполнено поле E-mail";
            } else {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_ERROR["valid"][] = "$email - невалидный адрес";
                } else {
                    $parts = explode("@", $email);
                    $domain = $parts[1];
                    
                    if ($domain != 'gmail.com' && $domain != 'mail.ru') {
                        $_ERROR["valid"][] = "$email - невалидный адрес";
                    }
                }
            }

            if (empty($_POST['pwd'])) {
                $_ERROR["empty"][] = "Не заполнено поле Пароль";
            } else {
                $pwd = strip_tags($_POST['pwd']);
                if (!preg_match('/^[0-9a-zA-Z!@#$%^&*]{6,15}$/', $pwd)) {
                    $_ERROR["valid"][] = "Пароль не соответствует требованиям";
                }
            }

            if (count($_ERROR["empty"]) > 0 || count($_ERROR["valid"]) > 0) {
                
                if (count($_ERROR["empty"]) > 0) {
                    echo "<h3>Пустые значения</h3>";
                    foreach ($_ERROR["empty"] as $error) {
                        echo "$error<br>";
                    }
                }
                
                if (count($_ERROR["valid"]) > 0) {
                    echo "<h3>Невалидные значения</h3>";
                    foreach ($_ERROR["valid"] as $error) {
                        echo "$error<br>";
                    }
                }
                
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