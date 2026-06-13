<?php
	$json = '{
    	\'name\' : "Harry Potter and the Goblet of Fire";
    	\'author\' : "J. K. Rowling";
    	\'year\' : "2000";
    	\'genre\' : "Fantasy Fiction";
    	\'bestseller\' : "true"
    }';
	
	echo "<h2>Ошибки в исходном JSON:</h2>";
	echo "<ul>";
	echo "<li><strong>Ошибка 1:</strong> Вместо двойных кавычек вокруг ключей используются одинарные кавычки (\') — в JSON ключи должны быть в двойных кавычках (\")</li>";
	echo "<li><strong>Ошибка 2:</strong> Вместо двоеточия (:) после ключа используется точка с запятой (;) — разделитель между ключом и значением должен быть двоеточием</li>";
	echo "<li><strong>Ошибка 3:</strong> Год (year) указан как строка \"2000\", хотя это число — в JSON числа не должны быть в кавычках</li>";
	echo "<li><strong>Ошибка 4:</strong> Значение true указано как строка \"true\", хотя должно быть логическим литералом true без кавычек</li>";
	echo "</ul>";
	
	$correct_json = '{
		"name": "Harry Potter and the Goblet of Fire",
		"author": "J. K. Rowling",
		"year": 2000,
		"genre": "Fantasy Fiction",
		"bestseller": true
	}';
	
	echo "<h2>Исправленное JSON представление:</h2>";
	echo "<pre>";
	echo $correct_json;
	echo "</pre>";

	$decoded_array = json_decode($correct_json, true);
	
	echo "<h2>Результат декодирования (ассоциативный массив):</h2>";
	echo "<pre>";
	print_r($decoded_array);
	echo "</pre>";
	
	if (json_last_error() === JSON_ERROR_NONE) {
		echo "<p style='color: green;'>Успех! JSON строка исправлена и декодирована верно.</p>";
	} else {
		echo "<p style='color: red;'>Ошибка декодирования: " . json_last_error_msg() . "</p>";
	}

	echo "<h2>Дополнительная проверка (правильный JSON):</h2>";
	$correct_array = [
		"name" => "Harry Potter and the Goblet of Fire",
		"author" => "J. K. Rowling",
		"year" => 2000,
		"genre" => "Fantasy Fiction",
		"bestseller" => true
	];
	
	$auto_json = json_encode($correct_array);
	echo "<pre>";
	echo $auto_json;
	echo "</pre>";
?>