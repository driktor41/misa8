<?php
// Вариант 1: include
echo "<h3>Вариант 1: include</h3>\n";
for ($i = 1; $i <= 5; $i++) {
    // include "{$i}.txt";  // Если файл не существует - выведет WARNING и продолжит выполнение
    echo "<br />\n";
}

// Вариант 2: require
echo "<h3>Вариант 2: require</h3>\n";
for ($i = 1; $i <= 5; $i++) {
    // require "{$i}.txt";  // Если файл не существует - выведет FATAL ERROR и остановит выполнение
    echo "<br />\n";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Конструкции</h2>
    <hr>
    <h2>Включения файлов</h2>
    
    <?php
    echo "<p><strong>Выводы:</strong></p>\n";
    echo "<ul>\n";
    echo "<li><strong>include:</strong> если файл не найден, генерируется (WARNING) - скрипт продолжает выполняться.</li>\n";
    echo "<li><strong>require:</strong> если файл не найден, генерируется (FATAL ERROR) - скрипт немедленно останавливается. Цикл прервется там, где файл отсутствует.</li>\n";
    echo "<li>include - когда отсутствие файла не критично для работы приложения.</li>\n";
    echo "<li>require - когда файл жизненно необходим для работы приложения.</li>\n";
    echo "</ul>\n";
    ?>
</body>
</html>
