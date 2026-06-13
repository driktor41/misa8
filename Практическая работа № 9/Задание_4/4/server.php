<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>	
	<h2>Отправка данных в строке запроса</h2>
	<hr>
	<h2>Информация полученная из строки запроса</h2>
	
	<?php
		if (isset($_GET['id']) && isset($_GET['album_name']) && isset($_GET['date']) && 
		    isset($_GET['label']) && isset($_GET['format']) && isset($_GET['status'])) {
			
			$id = htmlspecialchars($_GET['id']);
			$album_name = htmlspecialchars($_GET['album_name']);
			$date = htmlspecialchars($_GET['date']);
			$label = htmlspecialchars($_GET['label']);
			$format = htmlspecialchars($_GET['format']);
			$status = htmlspecialchars($_GET['status']);
			
			echo "<div style='border: 1px solid #ccc; padding: 15px; border-radius: 5px;'>";
			echo "<p><strong>Идентификатор альбома:</strong> {$id}</p>";
			echo "<p><strong>Название альбома:</strong> {$album_name}</p>";
			echo "<p><strong>Дата выпуска:</strong> {$date}</p>";
			echo "<p><strong>Лейбл студии:</strong> {$label}</p>";
			echo "<p><strong>Формат:</strong> {$format}</p>";
			echo "<p><strong>Статус:</strong> {$status}</p>";
			echo "</div>";
			
		} else {
			echo "<p style='color: red;'>Данные не получены. Пожалуйста, вернитесь на предыдущую страницу и перейдите по ссылке.</p>";
		}
	?>
	
</body>
</html>