<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<?php
	$VarStr = 'Слабая типизация PHP';
	const CONSTSTR = 'Слабая типизация PHP';
	define("ARRSTR", array('Слабая типизация PHP'));

	echo "Результат для переменной \$VarStr: ";
	var_dump($VarStr);

	echo "<br>Результат для константы CONSTSTR: ";
	var_dump(CONSTSTR);

	echo "<br>Результат для константы ARRSTR (массив): ";
	var_dump(ARRSTR);
	?>
	

</body>
</html>