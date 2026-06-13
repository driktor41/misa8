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
    <h2>Информация о пользователе</h2>

    <?php
        if (isset($_POST['loader'])) {
            
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>Отчество:</strong> " . $_POST['patronymic'] . "</p>";
            echo "<p><strong>Должность:</strong> " . $_POST['post'] . "</p>";
            echo "<p><strong>Категория:</strong> " . $_POST['category'] . "</p>";
            echo "<p><strong>Стаж в техникуме:</strong> " . $_POST['experience_college'] . "</p>";
            
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                
                $current_path = $_FILES['image']['tmp_name'];
                $filename = $_FILES['image']['name'];
                $new_path = __DIR__ . '/images/' . $filename;
                
                if (move_uploaded_file($current_path, $new_path)) {
                    echo "<p><strong>Изображение:</strong></p>";
                    echo "<img src='images/$filename' width='200px' alt='Фото пользователя'>";
                } else {
                    echo "<p><strong>Изображение:</strong></p>";
                    echo "<img src='images/no-photo.jpg' width='200px' alt='Нет фото'>";
                }
                
            } else {
                echo "<p><strong>Изображение:</strong></p>";
                echo "<img src='images/no-photo.jpg' width='200px' alt='Нет фото'>";
            }
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.html'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>