<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Просмотр альбомов и треков</h2>
    <hr>

    <?php
    // Подключение массивов
    require 'albums.php';
    require 'tracks.php';

    // GET-параметр
    $album_id = isset($_GET['id_album']) ? $_GET['id_album'] : null;

    if ($album_id) {
        // Режим 1: Вывод только выбранного альбома
        $target_album = null;
        foreach ($albums as $album) {
            if ($album['id_album'] == $album_id) {
                $target_album = $album;
                Break;
            }
        }

        if ($target_album) {
            echo "<h3>{$target_album['title']} ({$target_album['country']})</h3>\n";
            echo "<p>Дата выпуска: {$target_album['date']}</p>\n";
            echo '<ul>\n';
            
            $track_count = 0;
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album_id) {
                    echo "<li>{$track['name']}</li>\n";
                    $track_count++;
                }
            }
            
            echo '</ul>\n';
            echo '<p>Всего треков: $track_count</p>\n';
            echo "<p><a href='task14.php'>← Вернуться к списку всех альбомов</a></p>\n";
        } else {
            echo '<p>Альбом с ID = $album_id не найден.</p>\n';
            echo "<p><a href='task14.php'>← Вернуться к списку всех альбомов</a></p>\n";
        }
    } else {
        // Режим 2: Вывод всех альбомов вложенными списками
        echo '<h3>Все альбомы:</h3>\n';
        echo '<ol>\n';

        foreach ($albums as $album) {
            echo "<li><a href='?id_album={$album['id_album']}'>{$album['title']}</a> ({$album['country']}, {$album['date']})</li>\n";
            echo '<ul>\n';
            
            $track_count = 0;
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>{$track['name']}</li>\n";
                    $track_count++;
                }
            }
            
            if ($track_count == 0) {
                echo '<li><em>Нет треков</em></li>\n';
            }
            
            echo '</ul>\n';
        }

        echo '</ol>\n';
    }
    ?>
</body>
</html>
