<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<?php

		require 'function.php';	

		$data = fnGetData();
		
		$person = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		function getPersonData($data) {
			$fio = $data['surname'] . " " . $data['name'] . " " . $data['patronymic'];
			return "<h1>$fio</h1>
			<h2>Категория: {$data['category']}</h2>";
		}

		function getPersonEdu($data) {
			$res = "<h3>Образование:</h3><table border='1'>
				<tr><th>обучение</th><th>институт</th><th>квалификация</th><th>специализация</th></tr>";
			foreach ($data as $edu) {
				$res .= "<tr><td>{$edu['year_release']}</td><td>{$edu['institution']}</td><td>{$edu['qualification']}</td><td>{$edu['specialty']}</td></tr>";
			}
			return $res . "</table>";
		}
		function getPersonCours($data) {
			$res = "<h3>Курсы</h3><table border='1'>
				<tr><th>Наименование</th><th>Продолжительность</th><th>Цена</th></tr>";
			foreach ($data as $c) {
				$res .= "<tr><td>{$c['name']}</td><td>{$c['duration']}</td><td>{$c['duration']}</td></tr>";
			}
			return $res . "</table>";
		}
		
		
		// выводим персональные данные
		echo getPersonData($person);
		// выводим данные об образовании
		echo getPersonEdu($educations);
		// выводим данные о курсах
		echo getPersonCours($courses);
	?>
	

</body>
</html>


