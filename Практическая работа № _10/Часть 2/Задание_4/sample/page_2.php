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
    <h2>Регистрация. Страница 2</h2>

    <?php
        $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $patronymic = isset($_POST['patronymic']) ? $_POST['patronymic'] : '';
    ?>

    <form action="page_3.php" method="post">
        Должность: <input type="text" name="post"><p>
        Категория: <input type="text" name="category"><p>
        Стаж: <input type="text" name="experience"><p>   
        
        <input type="hidden" name="surname" value="<?= $surname; ?>">
        <input type="hidden" name="name" value="<?= $name; ?>">
        <input type="hidden" name="patronymic" value="<?= $patronymic; ?>">
        
        <input type="submit" name="submit" value="Далее">
    </form>

</body>
</html>