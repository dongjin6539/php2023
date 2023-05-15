<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- font -->
    <link href="https://webfontworld.github.io/gmarket/GmarketSans.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    
</head>
<body>
  <div class="login__wrap">
      <div class="login__title">
          <div class="login__logo">
              <img src="../html/assets/img/logo.png" alt="로고">
          </div>
          <div class="login__desc">
              <h2>login</h2>
              <span class="desc">아이디 및 비밀번호가 잘못되었습니다.<br> 다시 입력해주세요</span>
              <a href="../main/main.php" class="btnStyle atag">로그인 페이지로 이동</a>
          </div>
      </div>
  </div>
  
  <?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $userEmail = $_POST["userEmail"];
    $userPass = $_POST["userPass"];

    // 데이터 가져오기 --> 유효성 검사  -->  데이터 조회  --> 로그인
    $sql = "SELECT memberID, userEmail, userName, userPass FROM userMembers WHERE userEmail = '$userEmail' AND userPass = '$userPass'";
    
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count == 0){
            echo("
            <div class='login__wrap'>
                <div class='login__title'>
                    <div class='login__logo'>
                        <img src='../html/assets/img/logo.png' alt='로고'>
                    </div>
                    <div class='login__desc'>
                        <h2>login</h2>
                        <span class='desc'>아이디 및 비밀번호가 잘못되었습니다.<br> 다시 입력해주세요</span>
                        <a href='../main/main.php' class='btnStyle atag'>로그인 페이지</a>
                    </div>
                </div>
            </div>");
        } else {
            // 로그인 성공
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            $_SESSION['memberID'] = $info['memberID'];
            $_SESSION['userEmail'] = $info['userEmail'];
            $_SESSION['userName'] = $info['userName'];
            $userName = $_SESSION['userName'];
            // echo "<script>alert('환영합니다. {$userName}님');</script>";
            echo "<script>location.href = '../main/main.php'</script>";
        }
    } else {
        msg("에러발생 - 관리자에게 문의하세요!");
    }

    //  function msg($alert){
    //     echo "<p class='alert'>{$alert}<p/>";
    // }

    // $userEmail = $_POST["userEmail"];
    // $userPass = $_POST["userPass"];

    // // 비밀번호 검사
    // if( $userEmail == null || $userPass == '' ){
    //     msg("비밀번호를 입력해주세요!");
    //     exit;
    // }

    // // 데이터 가져오기 --> 유효성 검사  -->  데이터 조회  --> 로그인
    // $sql = "SELECT memberID, userEmail, userName, userPass FROM userMembers WHERE userEmail = '$userEmail';";
    // $result = $connect -> query($sql);
    
    // if($result){
    //     $count = $result -> num_rows;
    //     $info = $result -> fetch_array(MYSQLI_ASSOC);
    //     // $PWCheck= password_verify($userPass, $info['userPass']);

    //     // if($count == 0 || $PWCheck != 1){
    //     if($count == 0){
    //         msg("아이디 또는 비밀번호가 틀렸습니다.");
    //         // echo $count, $PWCheck;
    //         echo "<script>alert('$count, $PWCheck 아이디 또는 비밀번호가 틀렸습니다.');</script>";
    //         echo "<script>location.href = '../main/main.php'</script>";
    //         // Header("Location: http://bb020440.dothome.co.kr/php/main/main.php");
    //         exit;
    //     } else {
    //         $_SESSION['memberID'] = $info['memberID'];
    //         $_SESSION['userEmail'] = $info['userEmail'];
    //         $_SESSION['userName'] = $info['userName'];
    //         $userName = $info['userName'];
            
    //         echo "<script>alert(`환영합니다. {$userName}님`);</script>";
    //         echo "<script>location.href = '../main/main.php'</script>";
    //     }
    // } else {
    //     msg("에러발생 - 관리자에게 문의하세요!");
    // }
  ?>

</body>
</html>