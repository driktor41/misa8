<?php
// Многомерный массив с атомарными значениями
$discography = [
    [
        'id' => '1',
        'name' => 'Atom Heart Mother',
        'date' => '10 октября 1970',
        'label' => ['EMI', 'Harvest', 'Capitol'],
        'format' => ['LP', 'CD'],
        'status' => [
            ['name' => 'Золотой', 'country' => 'USA']
        ]
    ],
    [
        'id' => '2',
        'name' => 'Meddle',
        'date' => '30 октября 1971',
        'label' => ['EMI', 'Harvest', 'Capitol'],
        'format' => ['Vinyl', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA']
        ]
    ],
    [
        'id' => '3',
        'name' => 'Obscured by Clouds',
        'date' => '3 июня 1972',
        'label' => ['EMI', 'Harvest', 'Capitol'],
        'format' => ['LP', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Золотой', 'country' => 'USA'],
            ['name' => 'Серебряный', 'country' => 'GBR']
        ]
    ],
    [
        'id' => '4',
        'name' => 'The Dark Side of the Moon',
        'date' => '17 марта 1973',
        'label' => ['Harvest', 'Capitol', 'EMI'],
        'format' => ['LP', 'Кассета', 'CD', 'SACD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Платиновый', 'country' => 'GBR'],
            ['name' => 'Бриллиантовый', 'country' => 'CAN']
        ]
    ],
    [
        'id' => '5',
        'name' => 'Wish You Were Here',
        'date' => '15 сентября 1975',
        'label' => ['Harvest', 'EMI', 'Columbia', 'Capitol'],
        'format' => ['LP', '8-track', 'Кассета', 'CD', 'SACD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Золотой', 'country' => 'GBR'],
            ['name' => 'Платиновый', 'country' => 'CAN']
        ]
    ],
    [
        'id' => '6',
        'name' => 'Animals',
        'date' => '23 января 1977',
        'label' => ['Harvest', 'EMI', 'Columbia', 'Capitol'],
        'format' => ['LP', '8-track', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Золотой', 'country' => 'GBR'],
            ['name' => 'Платиновый', 'country' => 'CAN']
        ]
    ],
    [
        'id' => '7',
        'name' => 'The Wall',
        'date' => '30 ноября 1979',
        'label' => ['Harvest', 'EMI', 'Columbia', 'Capitol'],
        'format' => ['LP', '8-track', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Платиновый', 'country' => 'GBR'],
            ['name' => 'Бриллиантовый', 'country' => 'CAN'],
            ['name' => 'Платиновый', 'country' => 'NLD']
        ]
    ],
    [
        'id' => '8',
        'name' => 'The Final Cut',
        'date' => '21 марта 1983',
        'label' => ['Harvest', 'EMI', 'Columbia', 'Capitol'],
        'format' => ['LP', '8-track', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Золотой', 'country' => 'GBR'],
            ['name' => 'Золотой', 'country' => 'NLD']
        ]
    ],
    [
        'id' => '9',
        'name' => 'A Momentary Lapse of Reason',
        'date' => '8 сентября 1987',
        'label' => ['EMI', 'Columbia'],
        'format' => ['LP', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Золотой', 'country' => 'GBR'],
            ['name' => 'Платиновый', 'country' => 'CAN'],
            ['name' => 'Золотой', 'country' => 'NLD']
        ]
    ],
    [
        'id' => '10',
        'name' => 'The Division Bell',
        'date' => '30 марта 1994',
        'label' => ['EMI', 'Columbia'],
        'format' => ['LP', 'Кассета', 'CD'],
        'status' => [
            ['name' => 'Платиновый', 'country' => 'USA'],
            ['name' => 'Платиновый', 'country' => 'GBR'],
            ['name' => 'Платиновый', 'country' => 'CAN'],
            ['name' => 'Платиновый', 'country' => 'NLD']
        ]
    ]
];

echo "<h2>Многомерный массив с атомарными данными</h2>";
echo "<pre>";
print_r($discography);
echo "</pre>";

// Демонстрация получения атомарного значения
echo "<h3>Пример получения атомарных данных:</h3>";
echo "Статус альбома Atom Heart Mother в USA: ";
echo $discography[0]['status'][0]['name'] . " (" . $discography[0]['status'][0]['country'] . ")";
?>
