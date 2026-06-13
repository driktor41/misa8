<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Приём JSON данных</title>
</head>
<body>
	
	<h1>JSON формат</h1>
	<h2>Информация, полученная из строки JSON GET-параметра</h2>
	
	<?php
		if (isset($_GET['data'])) {

			$json_string = $_GET['data'];
			
			echo "<h3>Полученная JSON строка:</h3>";
			echo "<pre>";
			echo htmlspecialchars($json_string);
			echo "</pre>";

			$decoded_data = json_decode($json_string, true);
			if (json_last_error() === JSON_ERROR_NONE) {
				echo "<h3>Результат декодирования:</h3>";
				echo "<pre>";
				var_dump($decoded_data);
				echo "</pre>";
				echo "<h3>Информация об образовании (расшифровка):</h3>";
				
				foreach ($decoded_data as $index => $education) {
					echo "<div style='border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px;'>";
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
				echo "<p style='color: red;'>Ошибка декодирования JSON: " . json_last_error_msg() . "</p>";
			}
			
		} else {
			echo "<p style='color: red;'>Данные не получены. Пожалуйста, вернитесь на предыдущую страницу и перейдите по ссылке.</p>";
		}
	?>
	
</body>
</html>