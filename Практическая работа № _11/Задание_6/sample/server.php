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

        if (!empty($_POST['login'])) {
    
            $login = htmlspecialchars(trim($_POST['login']));

            if (!preg_match('/^[a-z0-9]{5,10}$/u', $login)) {
                $_ERROR[] = "Логин $login невалиден";
            } 
        } else {
            $_ERROR[] = "Не заполнено поле Логин";
        }

        if ($_FILES['myfile']["error"] != UPLOAD_ERR_OK) {
            switch ($_FILES['myfile']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    $_ERROR[] = "Размер принятого файла превысил максимально допустимый размер, который задан директивой upload_max_filesize конфигурационного файла php.ini (код ошибки: 1)";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $_ERROR[] = "Размер загружаемого файла превысил значение MAX_FILE_SIZE, указанное в HTML-форме (код ошибки: 2)";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $_ERROR[] = "Загружаемый файл был получен только частично (код ошибки: 3)";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $_ERROR[] = "Файл не был загружен (код ошибки: 4)";
            }
        } 

        if (empty($_ERROR)){
            define ('ALLOW_MIME_TYPE', array('image/jpeg', 'application/pdf', 'application/zip'));

            $mime_type = mime_content_type($_FILES["myfile"]["tmp_name"]);

            if (!in_array($mime_type, ALLOW_MIME_TYPE)) {
                $_ERROR[] = "Загружаемый файл типа '$mime_type' не относится к разрешенным типам. Разрешены: image/jpeg, application/pdf, application/zip";
            }           
        }

        if (empty($_ERROR)) {

            $current_path = $_FILES['myfile']['tmp_name'];

            $filename = $_FILES['myfile']['name'];

            $new_path = __DIR__ . '/upload/' . $filename;               

            if (move_uploaded_file($current_path, $new_path)) {

                $result = "<h3>Файл успешно загружен на сервер</h3>";
                if ($mime_type == 'image/jpeg') {
                    $result .= "<img src='upload/" . $filename . "' width='250px'>";
                } else {
                    $result .= "<p><strong>Имя файла:</strong> " . htmlspecialchars($filename) . "</p>";
                    $result .= "<p><strong>Тип файла:</strong> $mime_type</p>";
                    $result .= "<p><strong>Размер:</strong> " . $_FILES['myfile']['size'] . " байт</p>";
                }

            } else {
                $result = "<h3>Не удалось переместить файл в директорию хранения</h3>";
            }   

            echo $result;

        } else {

            echo "<h3>Ошибки загрузки:</h3>";
            echo "<pre>";
            print_r($_ERROR);
            echo "</pre>";
        }
    ?>

</body>
</html>