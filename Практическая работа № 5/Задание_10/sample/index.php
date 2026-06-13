<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Функции</h1>
    <h2>Встроенные функции, часть 3</h2>

    <?php
        require "albums.php";
        
        echo "<h3>Исходный массив:</h3>";
        echo "<pre>";
        print_r($albums);
        echo "</pre>";
        
        $new_albums = array();
        $counter = 1;
        
        foreach ($albums as $item) {
            if (!array_key_exists("id", $item)) {
                $item["id"] = $counter;
            }
            $new_albums[] = $item;
            $counter++;
        }
        
        $albums = $new_albums;
        
        echo "<h3>Массив после добавления id:</h3>";
        echo "<pre>";
        print_r($albums);
        echo "</pre>";
        
        echo "<h3>Результат:</h3>";
        foreach ($albums as $item) {
            echo "Альбом: {$item['album_name']} - ID: {$item['id']}<br />";
        }
    ?>

</body>
</html>