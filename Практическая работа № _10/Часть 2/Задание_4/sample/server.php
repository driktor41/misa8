<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Поздравляем с успешной регистрацией в школе разведчиков</h2>
    
    <?php
        if (isset($_POST['submit'])) {
            
            echo "<h3>Ваши регистрационные данные:</h3>";
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>Отчество:</strong> " . $_POST['patronymic'] . "</p>";
            echo "<p><strong>Должность:</strong> " . $_POST['post'] . "</p>";
            echo "<p><strong>Категория:</strong> " . $_POST['category'] . "</p>";
            echo "<p><strong>Стаж:</strong> " . $_POST['experience'] . "</p>";
            
            echo "<hr>";
            echo "<h3>Массив \$_POST:</h3>";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            
        } else {
            echo "<p>Ошибка: данные не получены!</p>";
        }
    ?>
    
    <h3>В ближайшее время с вами свяжется наш человек (в черном). Передаст вам оружие, акваланг, ксиву и инструкцию по дальнейшим действиям.</h3>

    <footer align="center">
        <h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
        <a href="https://vk.com/omsk_pro" target="_blank">omsk_PRO</a>
    </footer>
</body>
</html>