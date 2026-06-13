<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    
    <?php
        include "orders.php";
        
        $orders_json = json_encode($orders, JSON_UNESCAPED_UNICODE);
    ?>
    
    <form action="server.php" method="post">
        Фамилия: <input type="text" name="surname"><p>
        Имя: <input type="text" name="name"><p>
        E-mail: <input type="email" name="email"><p>
        
        <input type="hidden" name="orders" value='<?= $orders_json; ?>'>
        
        <input type="submit" name="submit" value="Отправить">
    </form>

</body>
</html>