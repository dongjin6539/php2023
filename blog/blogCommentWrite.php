<?php
    include "../connect/connect.php";

    $uBlogID = $_POST['uBlogID'];
    $memberID = $_POST['memberID'];
    $commentName = $_POST['name'];
    $commentPass = $_POST['pass'];
    $commentWrite = $_POST['msg'];
    $regTime = time();

    $sql = "INSERT INTO uBlogComment(memberID, uBlogID, commentName, commentPass, commentMsg, commentDelete, regTime) VALUES('$memberID', '$uBlogID', '$commentName', '$commentPass', '$commentWrite', '0', '$regTime')";
    $result = $connect -> query($sql);
    
    echo json_encode(array("info" => $uBlogID));
?>