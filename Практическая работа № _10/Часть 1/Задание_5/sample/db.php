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
    <h2>Модуль поиска информации, согласно пришедшего критерия</h2>

    <?php
        if (isset($_GET['data'])) {
            
            $json_string = $_GET['data'];
            
            $criteria = json_decode($json_string, true);
            
            echo "<pre>";
            var_dump($criteria);
            echo "</pre>";
            
        } else {
            echo "<p>Критерии поиска не переданы.</p>";
            echo "<p><a href='index.html'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>