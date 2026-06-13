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

            if (empty($_POST['login'])) {
                $_ERROR[] = "Не заполнено поле Логин";
            } else {
                $login = trim($_POST['login']);
                $login = filter_var($login, FILTER_SANITIZE_STRING);
                if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
                    $_ERROR[] = "Логин '$login' невалиден. Допустимы только латинские буквы и цифры (5-10 символов)";
                }
            }

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
            
            if (count($_ERROR) == 0) {
                $image_type = exif_imagetype($_FILES['myfile']['tmp_name']);
                
                if ($image_type === false) {
                    $_ERROR[] = "Загруженный файл не является изображением";
                } else {
                    $allowed_types = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];
                    
                    if (!in_array($image_type, $allowed_types)) {
                        $_ERROR[] = "Недопустимый тип изображения. Разрешены только JPEG, PNG, BMP";
                    }
                }
            }

            if (count($_ERROR) == 0) {
                if (!is_dir(__DIR__ . '/upload')) {
                    mkdir(__DIR__ . '/upload', 0777, true);
                }
                
                $current_path = $_FILES['myfile']['tmp_name'];
                $filename = $_FILES['myfile']['name'];
                $new_path = __DIR__ . '/upload/' . $filename;
                
                if (move_uploaded_file($current_path, $new_path)) {
                    echo "<h3 style='color: green;'>Файл успешно загружен на сервер!</h3>";
                    echo "<p><strong>Логин пользователя:</strong> $login</p>";
                    echo "<p><strong>Имя файла:</strong> " . htmlspecialchars($filename) . "</p>";
                    echo "<p><strong>Размер файла:</strong> " . $_FILES['myfile']['size'] . " байт</p>";
                    echo "<p><strong>Путь к файлу:</strong> upload/$filename</p>";
                    echo "<img src='upload/$filename' width='200px' alt='Аватар'>";
                } else {
                    $_ERROR[] = "Не удалось переместить файл в директорию хранения";
                }
            }

            if (count($_ERROR) > 0) {
                echo "<h3>Ошибки загрузки:</h3>";
                foreach ($_ERROR as $error) {
                    echo "<p style='color: red;'>$error</p>";
                }
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
        }
    ?>

</body>
</html>