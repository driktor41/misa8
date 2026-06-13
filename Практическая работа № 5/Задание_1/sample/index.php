<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php
		require "teams.php";

		if (isset($_GET["id"]) && !empty($_GET["id"])) {
			$id = $_GET["id"];
			$found = false;
			
			echo "<h3>Информация о группе с ID = $id</h3>";
			
			foreach ($content as $team) {
				if ($team["id"] == $id) {
					echo "<ul>";
					echo "<li><strong>ID:</strong> " . $team["id"] . "</li>";
					echo "<li><strong>Название:</strong> " . $team["name"] . "</li>";
					echo "<li><strong>Страна:</strong> " . $team["country"] . "</li>";
					echo "<li><strong>Год основания:</strong> " . $team["date"] . "</li>";
					echo "<li><strong>Стиль:</strong> " . $team["style"] . "</li>";
					echo "</ul>";
					$found = true;
					break;
				}
			}
			
			if (!$found) {
				echo "<p>Группа с идентификатором $id не найдена.</p>";
			}
		} else {
			echo "<h3>Список всех групп</h3>";
			
			echo "<table border='1' cellpadding='8' cellspacing='0'>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Название группы</th>";
			echo "<th>Страна</th>";
			echo "<th>Год основания</th>";
			echo "<th>Стиль</th>";
			echo "</tr>";
			
			foreach ($content as $team) {
				echo "<tr>";
				echo "<td>" . $team["id"] . "</td>";
				echo "<td>" . $team["name"] . "</td>";
				echo "<td>" . $team["country"] . "</td>";
				echo "<td>" . $team["date"] . "</td>";
				echo "<td>" . $team["style"] . "</td>";
				echo "</tr>";
			}
			
			echo "</table>";
		}
	?>
	

</body>
</html>