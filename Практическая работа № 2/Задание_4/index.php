<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	
	<?php
		// Определение переменных
		$var1 = 952; 
		$var2 = 4;  
		$var3 = 3;  
		$var4 = 476; 
		$var5 = 7;  
		$var6 = 196; 

		// Вычисление части выражения
		$part1 = $var1 / $var2;      
		$part2 = $part1 * $var3;      
		$part3 = $var4 / $var5;       
		$result = $part2 - $part3 + $var6;    

		// Вывод расчётного значение в браузер
		echo "Результат вычисления выражения равен: " . $result;

	?>
	

</body>
</html>