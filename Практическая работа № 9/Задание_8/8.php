<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	require 'team.txt';
	$teams = json_decode($team);
	echo "<pre>";
	print_r($teams);
	echo "</pre>";
	if (json_last_error() !== JSON_ERROR_NONE) {
		echo "<p style='color: red;'>Ошибка: " . json_last_error_msg() . "</p>";
	}
?>
</body>
</html>