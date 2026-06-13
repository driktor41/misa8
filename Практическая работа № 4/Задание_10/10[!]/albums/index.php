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
    require 'albums_data.php';

    // Вывод в табличном виде
    echo "<table border='1' cellpadding='5' cellspacing='0'>\n";
    echo "<tr><th>ID</th><th>Альбом</th><th>Дата выпуска</th><th>Страна</th><th>Идентификатор группы</th></tr>\n";

    foreach ($album as $item) {
        echo "<tr>\n";
        echo "<td>{$item['id_album']}</td>\n";
        echo "<td>{$item['title']}</td>\n";
        echo "<td>{$item['date']}</td>\n";
        echo "<td>{$item['country']}</td>\n";
        echo "<td>{$item['id_team']}</td>\n";
        echo "</tr>\n";
    }

    echo "</table>\n";
    ?>
</body>

</html>