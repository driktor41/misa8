<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Просмотр альбома</h2>
    <hr>

    <?php
    // Подключение массивов
    require 'albums.php';
    require 'tracks.php';

    // GET-параметр
    $album_id = isset($_GET['id_album']) ? $_GET['id_album'] : null;

    if ($album_id) {
        // Альбом по id
        $target_album = null;
        foreach ($albums as $album) {
            if ($album['id_album'] == $album_id) {
                $target_album = $album;
                break;
            }
        }

        if ($target_album) {
            echo "<h3>{$target_album['title']} ({$target_album['country']})</h3>\n";
            echo '<ul>\n';
            
            // Вывод треков альбома
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album_id) {
                    echo "<li>{$track['name']}</li>\n";
                }
            }
            
            echo '</ul>\n';
        } else {
            echo '<p>Альбом с ID = $album_id не найден.</p>\n';
            echo '<p>Доступные альбомы:</p>\n';
            echo '<ul>\n';
            foreach ($albums as $album) {
                echo "<li><a href='?id_album={$album['id_album']}'>{$album['title']}</a> (ID: {$album['id_album']})</li>\n";
            }
            echo '</ul>\n';
        }
    } else {
        // Если параметр не передан - список доступных альбомов
        echo '<p>Выберите альбом для просмотра:</p>\n';
        echo '<ul>\n';
        foreach ($albums as $album) {
            echo "<li><a href='?id_album={$album['id_album']}'>{$album['title']}</a> ({$album['country']}, {$album['date']})</li>\n";
        }
        echo '</ul>\n';
    }
    ?>
</body>
</html>
