<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Вложенные списки альбомов и треков</h2>
    <hr>

    <?php
    // Подключение массивов
    require __DIR__ . 'albums.php';
    require __DIR__ . 'tracks.php';

    echo '<ol>\n';

    // Внешний цикл по альбомам
    foreach ($albums as $album) {
        echo "<li>{$album['title']} ({$album['country']})</li>\n";
        echo '<ul>\n';
        
        // Внутренний цикл по трекам
        foreach ($tracks as $track) {
            // Связь по внешнему ключу id_album
            if ($track['id_album'] == $album['id_album']) {
                echo "<li>{$track['name']}</li>\n";
            }
        }
        
        echo '</ul>\n';
    }

    echo '</ol>\n';
    ?>
</body>
</html>
