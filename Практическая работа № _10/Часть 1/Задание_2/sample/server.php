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
        if (isset($_POST['submit'])) {
            
            echo "<h3>Сервер получил следующие данные</h3>";
            
            $data = array(
                "name" => $_POST['name'],
                "alias" => $_POST['alias'],
                "country" => $_POST['country'],
                "date" => $_POST['date'],
                "style" => $_POST['style'],
                "path" => $_POST['path'],
                "content" => $_POST['content'],
                "note" => $_POST['note']
            );
            
            $json_string = json_encode($data, JSON_UNESCAPED_UNICODE);
            
            echo "<h3>JSON строка</h3>";
            echo "<p>" . $json_string . "</p>";
            
            $php_array = json_decode($json_string, true);
            
            echo "<h3>PHP массив</h3>";
            echo "<pre>";
            print_r($php_array);
            echo "</pre>";
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.html'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>