<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Функции</h1>
    <h2>Встроенные функции, часть 2</h2>
    <?php
        // ввести get параметр в поисковую строку /index.php?search=teams::(число)
        if (isset($_GET["search"]) && !empty($_GET["search"])) {
            
            $parts = explode("::", $_GET["search"]);
            
            if (count($parts) == 2) {
                
                $entity = $parts[0];
                $id = $parts[1];
                
                if (is_numeric($id)) {
                    
                    switch ($entity) {
                        case "teams":
                            require "dump/teams.php";
                            $title = "Группа";
                            break;
                        case "albums":
                            require "dump/albums.php";
                            $title = "Альбом";
                            break;
                        case "tracks":
                            require "dump/tracks.php";
                            $title = "Трек";
                            break;
                        default:
                            echo "<p>Ошибка: Неизвестная сущность '$entity'</p>";
                            $content = null;
                            break;
                    }
                    
                    if (isset($content) && is_array($content)) {
                        
                        $found = false;
                        
                        foreach ($content as $item) {
                            if ($item["id"] == $id) {
                                $found = true;
                                echo "<h3>$title (ID = $id)</h3>";
                                echo "<ul>";
                                
                                foreach ($item as $key => $value) {
                                    echo "<li><strong>$key:</strong> $value</li>";
                                }
                                echo "</ul>";
                                break;
                            }
                        }
                        
                        if (!$found) {
                            echo "<p>Запись с ID = $id не найдена</p>";
                        }
                    }
                }
            }
        }
    ?>
    
</body>
</html>