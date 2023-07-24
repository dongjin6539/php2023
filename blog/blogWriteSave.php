<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $uBlogAuthor = $_SESSION['youName'];

    $uBlogCategory = $_POST['uBlogCategory'];
    $uBlogTitle = $_POST['uBlogTitle'];
    // $uBlogTitle = htmlspecialchars($_POST['uBlogTitle'], ENT_QUOTES, 'UTF-8');
    // $uBlogContents = nl2br($_POST['uBlogContents']);
    $uBlogContents = htmlspecialchars($_POST['uBlogContents'], ENT_QUOTES, 'UTF-8');
    $uBlogContents = nl2br($uBlogContents);
    

    $uBlogView = 1;
    $uBlogLike = 0;
    $regTime = time();

    $uBlogImgFile = $_FILES['uBlogFile'];
    $uBlogImgSize = $_FILES['uBlogFile']['size'];
    $uBlogImgType = $_FILES['uBlogFile']['type'];
    $uBlogImgName = $_FILES['uBlogFile']['name'];
    $uBlogImgTmp = $_FILES['uBlogFile']['tmp_name'];
    
    // echo "<pre>";
    // var_dump($uBlogImgFile);
    // echo "</pre>";

    // 이미지 파일명 확인
    if($uBlogImgType){
        $fileTypeExtension = explode("/", $uBlogImgType);
        $fileType = $fileTypeExtension[0];  // image
        $fileExtension = $fileTypeExtension[1]; // jpeg
        
        // 이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $uBlogImgDir = "../assets/blog/";
                $uBlogImgName = "Img_".time().rand(1, 99999)."."."{$fileExtension}";

                echo "이미지 파일이 맞습니다.";
                $sql = "INSERT INTO uBlog(memberID, uBlogTitle, uBlogContents, uBlogCategory, uBlogAuthor, uBlogView, uBlogLike, uBlogImgFile, uBlogImgSize, uBlogDelete, uBlogRegTime) VALUES('$memberID', '$uBlogTitle', '$uBlogContents', '$uBlogCategory', '$uBlogAuthor', '$uBlogView', '$uBlogLike', '$uBlogImgName', '$uBlogImgSize', '0', '$regTime')";
            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    } else {
        echo "이미지 파일을 첨부하지 않았습니다.";
    $sql = "INSERT INTO uBlog(memberID, uBlogTitle, uBlogContents, uBlogCategory, uBlogAuthor, uBlogView, uBlogLike, uBlogImgFile, uBlogImgSize, uBlogDelete, uBlogRegTime) VALUES('$memberID', '$uBlogTitle', '$uBlogContents', '$uBlogCategory', '$uBlogAuthor', '$uBlogView', '$uBlogLike', 'Img_default.jpg', '$uBlogImgSize', '0', '$regTime')";
    }

    // 이미지 사이즈 확인
    if($uBlogImgSize > 10000000){
        echo "<script>alert('이미지 파일 용량이 1MG를 초과했습니다.')</script>";
    }

    $result = $connect -> query($sql);
    $result = move_uploaded_file($uBlogImgTmp, $uBlogImgDir.$uBlogImgName);

    Header("Location: blog.php");
?>