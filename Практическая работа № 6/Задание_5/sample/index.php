<?php
    include 'dump/personnel.php';
    include 'dump/educations.php';
    include 'dump/courses.php';

    $sId = isset($_GET['id']) ? (int)$_GET['id'] : 1;

    $t1 = null;
    foreach ($personnel as $person) {
        if ($person['id_personnel'] === $sId) {
            $t1 = $person;
        }
    }

    if ($t1) {
        echo "<h1>{$t1['surname']} {$t1['name']} {$t1['patronymic']}</h1>";
        echo "<p><strong>Должность:</strong> {$t1['post']}</p>";
        echo "<p><strong>Стаж (общий/в колледже):</strong> {$t1['experience_total']} / {$t1['experience_college']} лет</p>";
        if ($t1['email']) echo "<p><strong>Email:</strong> {$t1['email']}</p>";

        echo "<h3>Образование</h3>";
        foreach ($educations as $edu) {
            if ($edu['id_personnel'] === $sId) {
                echo "<div>- {$edu['institution']} ({$edu['specialty']})</div>";
            }
        }

        echo "<h3>Преподаваемые курсы</h3>";
        echo "<ul>";
        foreach ($courses as $course) {
            if ($course['id_personnel'] === $sId) {
                echo "<li>{$course['name']}- {$course['price']} руб. ({$course['duration']} ч.)</li>";
            }
        }

        echo "</ul>";

    } else {
        echo "<h1>Преподаватель с ID $sId не найден.</h1>";
    }
?>