<?php
    require "album.php";

    function fnOutAlbum($arr) {
        $Sout = "<table border='3'>
            <tr>
                <td>ID</td>
                <td>Альбом</td>
                <td>Дата выпуска</td>
                <td>Страна</td>
            </tr>";

        foreach ($arr as $row) {
            $Sout .= "<tr>
                <td>{$row['id_album']}</td>
                <td>{$row['title']}</td>
                <td>{$row['date']}</td>
                <td>{$row['country']}</td>
            </tr>";
        }

        "</table>";
        return $Sout;
    }
    echo fnOutAlbum($album);
?>