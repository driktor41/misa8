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
		if (isset($_GET['educations'])) {
			echo "<h3>Данные об образовании (массив):</h3>";
			echo "<pre>";
			print_r($_GET['educations']);
			echo "</pre>";
			
			echo "<hr>";
			echo "<h3>Информация об образовании (расшифровка):</h3>";
			
			$educations = $_GET['educations'];
			
			foreach ($educations as $index => $education) {
				echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
				echo "<h4>Запись #" . ($index + 1) . " (ID: " . htmlspecialchars($education['id']) . ")</h4>";
				echo "<p><strong>Учебное заведение:</strong> " . htmlspecialchars($education['institution']) . "</p>";
				echo "<p><strong>Квалификация:</strong> " . htmlspecialchars($education['qualification']) . "</p>";
				echo "<p><strong>Специальность:</strong> " . htmlspecialchars($education['specialty']) . "</p>";
				echo "<p><strong>Год поступления:</strong> " . htmlspecialchars($education['year_receipts']) . "</p>";
				echo "<p><strong>Год выпуска:</strong> " . htmlspecialchars($education['year_release']) . "</p>";
				if (!empty($education['note'])) {
					echo "<p><strong>Примечание:</strong> " . htmlspecialchars($education['note']) . "</p>";
				}
				echo "</div>";
			}
		} else {
			echo "<p style='color: red;'>Данные не получены. Пожалуйста, вернитесь на предыдущую страницу и перейдите по ссылке.</p>";
		}
	?>

</body>
</html>