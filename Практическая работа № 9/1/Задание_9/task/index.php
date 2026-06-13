<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
	
    <h1>Отправка данных на сервер</h1>
	<h2>JSON формат</h2>
	
	<?php		
		// подключаем файл с переменной, содержащей json объект
		require "team.json";

		// декодируем json в ассоциативный PHP массив
		$arr = json_decode ($team, JSON_OBJECT_AS_ARRAY);

        // создаем ассоциативный массив с данными о новой группе
        $item['id_team'] = 7;
        $item['name'] = "Пикник";
        $item['alias'] = "picnic";
        $item['country'] = "Россия";
        $item['content'] = "Группа образована в сентябре 1978 года в Ленинграде из студентов Ленинградского политехнического университета (Политеха), игравших в любительской группе «Орион»";
        $item['date'] = "1978";
        $item['style'] = "рок, арт, готик, инди";
        $item['path'] = "/assets/teams/picnic.jpg";
        $item['note'] = "Отправной точкой нынешнего «Пикника» сами участники группы считают приход в группу Эдмунда Шклярского в 1981 году, либо год записи первого альбома — 1982 год";

        // добавляем массив к имеющимся данным
        array_push($arr, $item);

		// выводим обновленный массив 
		echo "<pre>";
		print_r($arr);
	?>
	
    <footer align="center">
		<h3>Веб-разработка | Профессионалы | Демоэкзамен</h3>
		<a href="https://vk.com/pechora_pro" target="_blank">pechora_PRO</a>
	</footer>
</body>
</html>