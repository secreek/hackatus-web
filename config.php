<?php
    if($_GET["urls"]) {
        echo $_GET["urls"];
        file_put_contents("source.urls", $_GET['urls']);
    } 
?>
