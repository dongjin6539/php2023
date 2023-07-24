<?php
    $host = "localhost";
    $user = "dongjin6539";
    $pw = "shin3536!";
    $db = "dongjin6539";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("uft-8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>