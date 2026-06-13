<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Конструкции</h2>

    <?php
    // Подключаем массив с данными сотрудников
    require 'personnels.php';

    // Критерий поиска
    $term = 'surname';
    $value = 'Маркова';

    echo '<h3>Результаты поиска (фамилия: $value):</h3>\n';

    $found = false;
    
    foreach ($content as $item) {
        if ($item[$term] == $value) {
            $found = true;
            echo "id: {$item['id_personnel']}<br />\n";
            echo "Фамилия: {$item['surname']}<br />\n";
            echo "Имя: {$item['name']}<br />\n";
            echo "Отчество: {$item['patronymic']}<br />\n";
            echo "Должность: {$item['post']}<br />\n";
            echo "Категория: {$item['category']}<br />\n";
            echo "Образование: {$item['level_edu']}<br />\n";
            echo "Стаж работы в ОУ: {$item['experience_total']}<br />\n";
            
            if ($item['email']) {
                echo "Email: {$item['email']}<br />\n";
            }
            if ($item['main_post']) {
                echo 'Основная должность: {$item[‘main_post’]}<br />\n';
            }
        }
    }

    if (!$found) {
        echo '<p>Сотрудник с фамилией "$value" не найден.</p>\n';
    }
    ?>
</body>
</html>
