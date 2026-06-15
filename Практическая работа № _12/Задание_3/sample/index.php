<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Регулярные выражения, часть 1</h2>

    <?php
    // массив для поиска совпадений с шаблоном
    $array = array(
        "PostgreSQL. Мастерство разработки",
        "Сборник рецептов MySQL",
        "Чертоги разума. Убей в себе идиота!",
        "Рефакторинг sql-приложений",
        "Python в веб приложениях",
        "SQL. Полное руководство"
    );

    $sql_books = [];

    $pattern = '/sql/i';

    foreach ($array as $book) {
        if (preg_match($pattern, $book)) {
            $sql_books[] = $book;
        }
    }

    echo "<ul>";
    foreach ($sql_books as $sql_book) {
        echo "<li>" . htmlspecialchars($sql_book) . "</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
