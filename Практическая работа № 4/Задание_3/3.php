<?php
// Расчет корней квадратного уравнения

function solveQuadratic($a, $b, $c) {
    echo "Уравнение: {$a}x² + {$b}x + {$c} = 0\n";
    
    // дискриминант
    $d = $b * $b - 4 * $a * $c;
    echo "Дискриминант D = {$d}\n";
    
    if ($d > 0) {
        // корни
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "Два корня:\n";
        echo "x1 = " . round($x1, 4) . "\n";
        echo "x2 = " . round($x2, 4) . "\n";
        return [$x1, $x2];
    } elseif ($d == 0) {
        // один корень
        $x = (-$b + sqrt($d)) / (2 * $a);
        echo "Один корень:\n";
        echo "x = " . round($x, 4) . "\n";
        return [$x];
    } else {
        // нет корней
        echo "Корней нет\n";
        return [];
    }
}

// Примеры использования
echo "Пример 1:\n";
solveQuadratic(1, -3, 2);  // x² - 3x + 2 = 0

echo "\nПример 2:\n";
solveQuadratic(1, 2, 1);   // x² + 2x + 1 = 0

echo "\nПример 3:\n";
solveQuadratic(1, 0, 1);   // x² + 1 = 0
?>
