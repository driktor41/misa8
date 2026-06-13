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
    require 'tracks_data.php';
    
    // Нумерованный список
    echo "Просмотр треков сервиса:<br>\n";
    echo "<ol>\n";
    
    foreach ($track as $item) {
        echo "<li>(id={$item['id_track']}) {$item['name']}</li>\n";
    }
    
    echo "</ol>\n";
    ?>
</body>
</html>
