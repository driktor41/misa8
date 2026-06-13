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
    	// ввести get параметр в поисковую строку   /index.php?a=1&b=5&c=6
        if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
            
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c = $_GET["c"];

            if (!empty($_GET["a"]) && !empty($_GET["b"]) && !empty($_GET["c"]) && 
                is_numeric($a) && is_numeric($b) && is_numeric($c)) {
                
                echo "<h3>Решение квадратного уравнения</h3>";
                echo "<p>Уравнение: $a * x<sup>2</sup> + $b * x + $c = 0</p>";
                
                $d = pow($b, 2) - 4 * $a * $c;
                echo "<p>Дискриминант (D) = $d</p>";
                
                if ($d > 0) {
                    // 2 корня
                    $x1 = (-$b + sqrt($d)) / (2 * $a);
                    $x2 = (-$b - sqrt($d)) / (2 * $a);
                    echo "<p><b>D > 0, уравнение имеет два корня:</b></p>";
                    echo "<p>x1 = $x1</p>";
                    echo "<p>x2 = $x2</p>";
                } elseif ($d == 0) {
                    // 1 корень
                    $x = -$b / (2 * $a);
                    echo "<p><b>D = 0, уравнение имеет один корень:</b></p>";
                    echo "<p>x = $x</p>";
                } else {
                    // корней нет
                    echo "<p><b>D < 0, уравнение не имеет действительных корней.</b></p>";
                }
            } else {
                echo "<p>Ошибка: Все коэффициенты должны быть числами и не могут быть пустыми.</p>";
                echo "<p>Пример правильного запроса: /index.php?a=1&b=5&c=6</p>";
            }
        } else {
            echo "<p>Ошибка: Не переданы все коэффициенты a, b, c.</p>";
            echo "<p>Пример правильного запроса: /index.php?a=1&b=5&c=6</p>";
        }
    ?>
    
</body>
</html>