<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Отправка форм</h2>
    <hr>
    <h2>Обработчик формы</h2>

    <?php
        if (isset($_POST['loader'])) {
            
            echo "<h3>Сервер получил следующие данные</h3>";
            
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>Отчество:</strong> " . $_POST['patronymic'] . "</p>";
            echo "<p><strong>Должность:</strong> " . $_POST['post'] . "</p>";
            echo "<p><strong>Уровень образования:</strong> " . $_POST['education'] . "</p>";
            echo "<p><strong>Категория:</strong> " . $_POST['category'] . "</p>";
            echo "<p><strong>Общий стаж:</strong> " . $_POST['experience_total'] . "</p>";
            echo "<p><strong>Стаж в техникуме:</strong> " . $_POST['experience_college'] . "</p>";
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.html'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>