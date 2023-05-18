<?php
  include "../connect/connect.php";
  include "../connect/session.php";
//   include "../connect/sessionCheck.php";
//   include "../connect/sessionCheck.php";
//   echo "<pre>";
//   var_dump($_SESSION);
//   echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이 페이지</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../html/assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->
        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->

        <section id="section__mypage">
            <div class="container">
                <h1 class="mypage">마이페이지</h1>
                <div class="section__box">
                    <div class="section__left">
                        <?php if(isset($_SESSION['memberID'])){?>
                        <img src="../html/assets/img/my__img2.png" alt="마이페이지 이미지1" />
                        <a href="#">정보수정</a>
                        <a href="#">비밀번호 변경</a>
                        <a href="mypageBoard.php">작성한 게시글</a>
                        <a href="#" onclick="return confirm('탈퇴하시겠습니까?')">탈퇴하기</a>
                        <?php } else { ?>
                            <div class="box">
                                <span><?php echo "잘못된 접근입니다." ?></span>
                            </div>
                        <?php }?>
                    </div>
                    <div class="section__right">
                        <form>
                            <legend class="blind">마이페이지 영역입니다.</legend>
                            <?php if(isset($_SESSION['memberID'])){
                                $memberID = $_SESSION['memberID'];
                                $sql = "SELECT memberID, userNickname, userPhone FROM userMembers WHERE memberID = {$memberID}";
                                $result = $connect -> query($sql);
                                $info = $result -> fetch_array(MYSQLI_ASSOC);
                            ?>
                            <div class="box">
                                <label>이름 : </label>
                                <span><?= $_SESSION['userName'] ?></span>
                            </div>
                            <div class="box">
                                <label>이메일 : </label>
                                <span><?= $_SESSION['userEmail'] ?></span>
                            </div>
                            <div class="box">
                                <label>닉네임 : </label>
                                <span><?= $info['userNickname'] ?></span>
                            </div>
                            <div class="box">
                                <label>연락처 : </label>
                                <span><?= $info['userPhone'] ?></span>
                            </div>
                            <?php } else { ?>
                                <div class="box">
                                    <span><?php echo "잘못된 접근입니다." ?></span>
                                </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- //#section -->
        
        <?php include "../include/footer.php"; ?>
    </div>
        <!-- sub --> 
</body>
</html>