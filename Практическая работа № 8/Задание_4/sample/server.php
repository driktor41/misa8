<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Загрузка файлов</h2>
    <hr>
    <h2>Результат загрузки файлов</h2>

    <?php
        $dirs = ['dir1', 'dir2', 'dir3'];
        
        $upload_dir = __DIR__ . '/upload/';
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        echo "<ul>";
        
        foreach ($dirs as $dir) {
            $file_path = __DIR__ . '/' . $dir . '/images.jpg';
            
            if (file_exists($file_path)) {
                $new_path = $upload_dir . $dir . '_images.jpg';
                
                if (copy($file_path, $new_path)) {
                    echo "<li>Файл из папки <strong>$dir</strong> успешно скопирован в upload</li>";
                } else {
                    echo "<li>Ошибка при копировании файла из папки <strong>$dir</strong></li>";
                }
            } else {
                echo "<li>Файл images.jpg не найден в папке <strong>$dir</strong></li>";
            }
        }
        
        echo "</ul>";
        echo "<p><strong>Все файлы находятся в директории upload</strong></p>";
    ?>

</body>
</html>