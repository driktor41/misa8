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
            
            $data = array();
            foreach ($_POST as $key => $value) {
                if ($key != 'submit') {
                    $data[$key] = $value;
                }
            }
            
            $view = isset($_GET['view']) ? $_GET['view'] : 'dump';
            
            if ($view == 'json') {
                echo "<h3>JSON строка</h3>";
                $json_string = json_encode($data, JSON_UNESCAPED_UNICODE);
                echo "<p>" . $json_string . "</p>";
            } else {
                echo "<h3>PHP массив</h3>";
                echo "<pre>";
                var_dump($data);
                echo "</pre>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.php?view=dump'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>