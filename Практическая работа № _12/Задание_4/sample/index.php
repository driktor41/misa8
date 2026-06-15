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
    $list = <<<HERE
    <ul>
        <li>PostgreSQL. Мастерство разработки</li>
        <li>Сборник рецептов MySQL</li>
        <li>Чертоги разума. Убей в себе идиота!</li>
        <li>Рефакторинг sql-приложений</li>
        <li>Python в веб приложениях</li>
        <li>SQL. Полное руководство</li>
    </ul>
HERE;

    preg_match_all('/<li>(.*?)<\/li>/', $list, $matches);
    $books = $matches[1];

    $sql_books = [];
    $pattern = '/sql/i';

    foreach ($books as $book) {
        if (preg_match($pattern, $book)) {
            $sql_books[] = $book;
        }
    }

    echo "<ol>";
    foreach ($sql_books as $sql_book) {
        echo "<li>" . htmlspecialchars($sql_book) . "</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>
