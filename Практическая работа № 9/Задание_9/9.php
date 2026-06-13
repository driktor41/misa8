<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	require 'team.json';
	
	echo "<h1>Задание 9: Добавление информации о новой группе</h1>";

	$teams = json_decode($team, true);
	
	echo "<h2>Исходный массив групп (до добавления):</h2>";
	echo "<pre>";
	print_r($teams);
	echo "</pre>";
	
	$new_team = [
		"id_team" => "7",
		"name" => "Пикник",
		"alias" => "picnic",
		"country" => "Россия",
		"content" => "Группа образована в сентябре 1978 года в Ленинграде из студентов Ленинградского политехнического университета (Политеха), игравших в любительской группе «Орион»",
		"date" => "1978",
		"style" => "рок, арт, готик, инди",
		"path" => "/assets/teams/picnic.jpg",
		"note" => "Отправной точкой нынешнего «Пикника» сами участники группы считают приход в группу Эдмунда Шклярского в 1981 году, либо год записи первого альбома — 1982 год"
	];
	
	$teams[] = $new_team;
	
	echo "<h2>Массив групп после добавления группы \"Пикник\":</h2>";
	echo "<pre>";
	print_r($teams);
	echo "</pre>";
	if (json_last_error() === JSON_ERROR_NONE) {
		echo "<p style='color: green;'>Успех! JSON строка декодирована верно.</p>";
	} else {
		echo "<p style='color: red;'>Ошибка декодирования: " . json_last_error_msg() . "</p>";
	}
	
	echo "<h2>Список всех групп (включая добавленную):</h2>";
	echo "<ul>";
	foreach ($teams as $team_item) {
		echo "<li><strong>" . htmlspecialchars($team_item['name']) . "</strong> (" . htmlspecialchars($team_item['country']) . "), основана в " . htmlspecialchars($team_item['date']) . ", стиль: " . htmlspecialchars($team_item['style']) . "</li>";
	}
	echo "</ul>";
	echo "<h2>Информация о добавленной группе \"Пикник\":</h2>";
	echo "<div style='border: 1px solid #ccc; padding: 15px; border-radius: 5px;'>";
	echo "<p><strong>ID:</strong> " . $teams[6]['id_team'] . "</p>";
	echo "<p><strong>Название:</strong> " . htmlspecialchars($teams[6]['name']) . "</p>";
	echo "<p><strong>Псевдоним:</strong> " . htmlspecialchars($teams[6]['alias']) . "</p>";
	echo "<p><strong>Страна:</strong> " . htmlspecialchars($teams[6]['country']) . "</p>";
	echo "<p><strong>Описание:</strong> " . htmlspecialchars($teams[6]['content']) . "</p>";
	echo "<p><strong>Год основания:</strong> " . htmlspecialchars($teams[6]['date']) . "</p>";
	echo "<p><strong>Стиль:</strong> " . htmlspecialchars($teams[6]['style']) . "</p>";
	echo "<p><strong>Путь к фото:</strong> " . htmlspecialchars($teams[6]['path']) . "</p>";
	echo "<p><strong>Примечание:</strong> " . htmlspecialchars($teams[6]['note']) . "</p>";
	echo "</div>";
	echo "<h2>Массив в формате JSON (для проверки):</h2>";
	echo "<pre>";
	echo json_encode($teams, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	echo "</pre>";
?>
</body>
</html>