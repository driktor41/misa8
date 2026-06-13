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
		require "albums.php";

		$album = array();

		foreach ($albums as $item){
			if ($item["id"] == $id) {

				$album[] = "id={$item['id']}";
				$album[] = "album_name=" . urlencode($item['album_name']);
				$album[] = "date=" . urlencode($item['date']);
				
				// Обработка массива label
				$label_str = implode(", ", $item['label']);
				$album[] = "label=" . urlencode($label_str);
				
				// Обработка массива format
				$format_str = implode(", ", $item['format']);
				$album[] = "format=" . urlencode($format_str);
				
				// Обработка массива status
				$status_str = implode(", ", $item['status']);
				$album[] = "status=" . urlencode($status_str);
			}
		}
		
		$queryString = implode("&", $album);

		echo "<a href='server.php?{$queryString}'>Передать данные об альбоме на сервер</a>";
	?>
	
</body>
</html>