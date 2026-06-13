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
    <h2>Оформление заказа</h2>
    
    <?php
        if (isset($_POST['submit'])) {
            
            echo "<h3>Данные о заказчике:</h3>";
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            
            echo "<h3>Данные о заказах (JSON-строка из скрытого поля):</h3>";
            echo "<p>" . $_POST['orders'] . "</p>";
            
            $orders_array = json_decode($_POST['orders'], true);
            
            echo "<h3>Данные о заказах (после декодирования JSON):</h3>";
            echo "<pre>";
            print_r($orders_array);
            echo "</pre>";
            
            echo "<h3>Расшифрованные данные заказов:</h3>";
            foreach ($orders_array as $key => $order) {
                echo "<p><strong>Заказ " . ($key + 1) . ":</strong><br>";
                echo "Товар: " . $order['product'] . "<br>";
                echo "Рост: " . $order['height'] . "<br>";
                echo "Материал: " . $order['material'] . "<br>";
                echo "Состав: " . $order['structure'] . "<br>";
                echo "Коллекция: " . $order['collection'] . "</p>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.php'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>