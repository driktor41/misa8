<?php

echo "Введите количество вспомненных строк из поэмы «Евгений Онегин»: ";
$lines = (int)readline();

echo "Результат: ";

switch ($lines) {
    case 2:
        echo "Беда.";
        break;
    case 4:
        echo "Плохо.";
        break;
    case 6:
        echo "Кажется, что вы где-то учились";
        break;
    case 8:
        echo "Вы среднестатистический человек.";
        break;
    case 10:
        echo "Нормально.";
        break;
    case 12:
        echo "Хорошо.";
        break;
    case 14:
        echo "Отлично.";
        break;
    default:
        if ($lines < 2) {
            echo "Вы ничего не вспомнили...";
        } elseif ($lines > 14) {
            echo "Превосходно! Вы знаете поэму наизусть!";
        } else {
            echo "Нет оценки для такого количества строк.";
        }
}
echo "\n";
?>
