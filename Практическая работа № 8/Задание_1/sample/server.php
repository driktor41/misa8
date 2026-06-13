<?php
if (isset($_POST['loader'])) {
    
    echo "<h2>Результат обработки формы:</h2>";
    
    echo "<h3>Принятые данные из формы (массив \$_POST):</h3>";
    echo "name: " . $_POST['name'] . "<br>";
    echo "alias: " . $_POST['alias'] . "<br>";
    echo "country: " . $_POST['country'] . "<br>";
    echo "date: " . $_POST['date'] . "<br>";
    echo "style: " . $_POST['style'] . "<br>";
    echo "content: " . $_POST['content'] . "<br>";
    
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        
        echo "<h3>Информация о загруженном файле (массив \$_FILES):</h3>";
        echo "Имя файла: " . $_FILES['image']['name'] . "<br>";
        echo "Тип содержимого: " . $_FILES['image']['type'] . "<br>";
        echo "Размер файла: " . $_FILES['image']['size'] . " байт<br>";
        echo "Временное имя: " . $_FILES['image']['tmp_name'] . "<br>";
        echo "Код ошибки: " . $_FILES['image']['error'] . "<br>";
        
        $current_path = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        $new_path = __DIR__ . '/images/' . $filename;
        
        if (move_uploaded_file($current_path, $new_path)) {
            echo "<p>Файл успешно загружен на сервер</p>";
        }
    }
    
} else {
    echo "Заполните форму";
}
?>