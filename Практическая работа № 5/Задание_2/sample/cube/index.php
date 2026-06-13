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
        $first = rand(1, 6);
        $second = rand(1, 6);
        $third = rand(1, 6);
        
        $sum = $first + $second + $third;

        echo "<div>";
        echo "<img src='$first.jpg' width='100px' alt='Кубик $first'> ";
        echo "<img src='$second.jpg' width='100px' alt='Кубик $second'> ";
        echo "<img src='$third.jpg' width='100px' alt='Кубик $third'>";
        echo "</div>";
        
        echo "<h2>Поздравляем!</h2>";
        echo "<p>Неимоверными усилиями вам удалось набрать $sum баллов!</p>";
    ?>
    
</body>
</html>