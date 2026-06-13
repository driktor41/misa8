<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Циклы</h2>
    <hr>
    <h2>Вывод массива</h2>
    
    <?php
    // Подключаем массив из отдельного файла
    require 'teams_data.php';
    
    // Вывод данных
    foreach ($team as $item) {
        echo "Группа: {$item['name']} (id = {$item['id_team']})<br/>\n";
        echo "Страна: {$item['country']}<br />\n";
        echo "Дата основания: {$item['date']}<br />\n";
        echo "Стиль: {$item['style']}<br />\n";
        echo "<hr/>\n<p>\n";
    }
    ?>
</body>
</html>
