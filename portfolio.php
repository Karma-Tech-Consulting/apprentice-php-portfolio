<?php
    include 'links.php';
    for($i = 0; $i < sizeof($links); $i++ ){
        echo "<h1> {$links[$i]['title']} </h1>";
        echo "<a href=\"{$links[$i]['link']}\" >";
        echo "<img src=\"{$links[$i]['image']}\" >";
        echo "</a> \n";
    }
?>