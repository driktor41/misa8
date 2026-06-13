<?php
    require "track.php";
    function fnOutTrack($track, $id) {
        echo '<table border="1">';
        echo '<tr><th>ID трека</th><th>Название трека</th><th>Примечание</th><th>Альбом</th></tr>';

        foreach ($track as $row) {
            if ($row['id_album'] == $id) {
                echo "<tr>
                    <td>{$row['id_track']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['note']}</td>
                    <td>{$row['id_album']}</td>
                </tr>";
            }
        }
        echo '</table>';
    }
    fnOutTrack($track, 4);
?>