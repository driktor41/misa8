<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Встроенные функции, часть 1</h2>
    
    <?php

        $count = 4;
        
        echo "<p>Количество кубиков: $count</p>";
        
        $cubes = array();
        for ($i = 0; $i < $count; $i++) {
            $cubes[$i] = rand(1, 6);
        }
        
        echo "<div>";
        for ($i = 0; $i < $count; $i++) {
            echo "<img src='cube/" . $cubes[$i] . ".jpg' width='100px' alt='Кубик " . $cubes[$i] . "'> ";
        }
        echo "</div>";
        
        $sum = 0;
        for ($i = 0; $i < $count; $i++) {
            $sum += $cubes[$i];
        }
        
        echo "<h2>Поздравляем!</h2>";
        echo "<p>Неимоверными усилиями вам удалось набрать $sum баллов!</p>";
    ?>
    
</body>
</html>