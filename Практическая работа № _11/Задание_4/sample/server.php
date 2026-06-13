<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Безопасность данных, часть 2</h2>
    <hr>
    <h2>Загрузка файлов</h2>

    <?php
        $_ERROR = [];

        if (isset($_POST['load'])) {

            if ($_FILES['myfile']['error'] == UPLOAD_ERR_NO_FILE) {
                $_ERROR[] = "Файл не был загружен";
            } 
            elseif ($_FILES['myfile']['error'] !== UPLOAD_ERR_OK) {
                switch ($_FILES['myfile']['error']) {
                    case UPLOAD_ERR_INI_SIZE:
                        $_ERROR[] = "Размер файла превысил максимально допустимый размер (php.ini)";
                        break;
                    case UPLOAD_ERR_FORM_SIZE:
                        $_ERROR[] = "Размер файла превысил значение MAX_FILE_SIZE в HTML-форме";
                        break;
                    case UPLOAD_ERR_PARTIAL:
                        $_ERROR[] = "Файл был загружен только частично";
                        break;
                    default:
                        $_ERROR[] = "Произошла ошибка при загрузке файла";
                }
            }
            else {
                $image_type = exif_imagetype($_FILES['myfile']['tmp_name']);
                
                if ($image_type === false) {
                    $_ERROR[] = "Загруженный файл не является изображением";
                } 
                else {

                    $allowed_types = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];
                    
                    if (!in_array($image_type, $allowed_types)) {
                        $_ERROR[] = "Недопустимый тип изображения. Разрешены только JPEG, PNG, BMP";
                    }
                }
            }

            if (count($_ERROR) > 0) {
                echo "<h3>Ошибки загрузки:</h3>";
                foreach ($_ERROR as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
            } else {
                echo "<h3 style='color: green;'>Файл успешно прошёл проверку!</h3>";
                echo "<p><strong>Имя файла:</strong> " . htmlspecialchars($_FILES['myfile']['name']) . "</p>";
                echo "<p><strong>Тип файла:</strong> " . $_FILES['myfile']['type'] . "</p>";
                echo "<p><strong>Размер:</strong> " . $_FILES['myfile']['size'] . " байт</p>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
        }
    ?>

</body>
</html>