<?php
    include "../connect/connect.php";

    $commentPass = $_POST['commentPass'];
    $commentID = $_POST['commentID'];

    $sql = "SELECT commentPass FROM uBlogComment WHERE commentPass = '$commentPass' AND commentID = '$commentID'";
    $result = $connect -> query($sql);

    if($result -> num_rows == 0){
        $jsonResult = "bad";
    } else {
        $sql = "DELETE FROM uBlogComment WHERE commentID = '$commentID'";
        $connect -> query($sql);
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));
?>