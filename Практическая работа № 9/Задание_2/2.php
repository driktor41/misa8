<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Отправка данных в строке запроса</h2>
	
	<?php
		$course = [
			[
				"Основы программирования", 
				["Введение в PHP", "Переменные", "Константы", "Типы данных", "Строки"]
			],		
			[
				"Функции",
				["Встроенные функции", "Пользовательские функции", "Область видимости переменных"]
			],
			[
				"Управляющие конструкции",
				["Условные операторы", "Циклы", "Конструкции"]
			]
		];

		if (isset($_GET['user']) && isset($_GET['topic']) && isset($_GET['lesson'])) {
			
			$user = $_GET['user'];
			$topicIndex = (int)$_GET['topic'] - 1; // преобразуем в индекс массива (1 → 0, 2 → 1, 3 → 2)
			$lessonIndex = (int)$_GET['lesson'] - 1; // преобразуем в индекс массива
			
			
			if (isset($course[$topicIndex])) {
				
				$topic = $course[$topicIndex][0];
				$lessons = $course[$topicIndex][1];
				
				echo "<h3>Пользователь: {$user}</h3>";
				echo "<h3>Тема: {$topic}</h3>";
				
				if (isset($lessons[$lessonIndex])) {
					$lesson = $lessons[$lessonIndex];
					echo "<h3>Урок: {$lesson}</h3>";
				} else {
					echo "<p style='color: red;'>Ошибка: Урок с номером {$_GET['lesson']} не найден в данной теме.</p>";
				}
				
			} else {
				echo "<p style='color: red;'>Ошибка: Тема с номером {$_GET['topic']} не найдена.</p>";
			}
			
		} else {
			echo "<p style='color: red;'>Ошибка: Не переданы все необходимые GET-параметры (user, topic, lesson).</p>";
			echo "<p>Пожалуйста, перейдите по ссылке с корректными параметрами.</p>";
		}
	?>
	
</body>
</html>