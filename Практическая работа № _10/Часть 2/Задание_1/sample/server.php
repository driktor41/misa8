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
    <h2>Данные о заказчике и заказе</h2>

    <?php
        if (isset($_POST['submit'])) {
            
            echo "<h3>Данные о заказчике:</h3>";
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            
            echo "<h3>Данные о заказе:</h3>";
            echo "<p><strong>Товар:</strong> " . $_POST['product'] . "</p>";
            echo "<p><strong>Рост:</strong> " . $_POST['height'] . "</p>";
            echo "<p><strong>Материал:</strong> " . $_POST['material'] . "</p>";
            echo "<p><strong>Состав:</strong> " . $_POST['structure'] . "</p>";
            echo "<p><strong>Коллекция:</strong> " . $_POST['collection'] . "</p>";
            
            echo "<hr>";
            echo "<h3>Массив \$_POST (print_r):</h3>";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.php'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>