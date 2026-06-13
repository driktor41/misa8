<?php
    $array = [
        [
            "id" => "1",
            "album_name" => "Atom Heart Mother",
            "date" => "10 октября 1970",
            "label" => "EMI, Harvest, Capitol",
            "status" => "Золотой (USA)"
        ],
        [
            "id" => "2",
            "album_name" => "Meddle",
            "date" => "30 октября 1971",
            "label" => "EMI, Harvest, Capitol",
            "status" => "Платиновый (USA)"
        ]
    ];

    echo "<h2>Исходный массив</h2>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $params = [];
    
    foreach ($array as $index => $item) {
        foreach ($item as $key => $value) {
            $encodedValue = urlencode($value);
            $params[] = "data[{$index}][{$key}]={$encodedValue}";
        }
    }
    
    $queryString = implode("&", $params);

    echo "<a href='?" . $queryString . "'>Перейти с сформированными GET-параметрами</a><br><br>";

    echo "<h2>Массив из строки запроса </h2>";
    echo "<pre>";

    if (isset($_GET["data"])) {
        print_r($_GET["data"]);
    } else {
        echo "GET-параметр 'data' не передан. Нажмите на ссылку выше.";
    }
    echo "</pre>";
?>