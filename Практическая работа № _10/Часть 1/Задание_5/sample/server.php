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
            
            $criteria = array();
            
            if (isset($_POST['brand'])) {
                $criteria['brand'] = $_POST['brand'];
            }
            if (isset($_POST['os'])) {
                $criteria['os'] = $_POST['os'];
            }
            if (isset($_POST['ssd'])) {
                $criteria['ssd'] = $_POST['ssd'];
            }
            
            $json_string = json_encode($criteria, JSON_UNESCAPED_UNICODE);
            
            $url_param = urlencode($json_string);
            
            echo "<p>Мы сформировали список ваших предпочтений и готовы начать поиск!</p>";
            
            echo "<center><a href='db.php?data=" . $url_param . "'>Начать поиск</a></center>";
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.html'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>