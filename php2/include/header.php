<header id="header">
    <h1><a href="#">헬드백</a></h1>
    <div class="header__login">
      <?php if(isset($_SESSION['memberID'])){?>
        <ul>
            <li><a href="#"><?= $_SESSION['userName'] ?> 회원님</a></li>
        </ul>
      <?php } ?>
    </div>
    <div class="icon__box">
        <ul>
            <?php if(isset($_SESSION['memberID'])){?>
                 <li class="logout"><a href="../login/logout.php"><img src="../html/assets/img/icon_logout.svg" alt="로그아웃" title="로그아웃"></a></li>
            <?php } else{?>
                <li class="login"><img src="../html/assets/img/icon_login.svg" alt="로그인" title="로그인"></li>
            <?php } ?>
            <li><a href="#"><img src="../html/assets/img/icon_mypage.svg" alt="마이페이지" title="마이페이지"></a></li>
            <li class="btn__menu"><a href="#"><img src="../html/assets/img/icon_menu.svg" alt="메뉴" title="메뉴"></a></li>
        </ul>
    </div>
</header>
<!-- //header -->
<nav id="nav">
    <button>X</button>
    <div class="nav__wrap">
        <img src="../html/assets/img/logo.png" alt="logo">

        <?php if(isset($_SESSION['memberID'])){?>
            <img class="profile" src="../html/assets/img/profile.png" alt="프로필">
            <li><a class="logout" href="../login/logout.php">로그아웃</a></li>
        <?php } else{?>
            <li class="login">로그인</li>
        <?php } ?>
        <!-- <a class="btnStyle5 m__btn" alr="로그인">로그인</a> -->

        <!-- <img class="profile" src="assets/img/profile.png" alt="프로필">
        <a href="#" class="btnStyle5" alr="로그아웃">로그아웃</a> -->
        <ul>
            <li><a href="intro.html">헬드백 소개</a></li>
            <li><a href="mainSection.html">운동 종류</a></li>
            <li><a href="board.html">커뮤니티</a></li>
            <li><a href="mypage.html">마이페이지</a></li>
        </ul>
    </div>
</nav>
<!-- //nav -->


<div class="login__popup">
    <div class="login__wrap">
        <div class="login__title">
            <div class="login__logo">
                <img src="../html/assets/img/logo.png" alt="로고">
            </div>
            <div class="login__desc">
                <h2>login</h2>
                <span class="desc">아이디 비밀번호를 입력해주세요!</span>
            </div>
        </div>
        <div class="login__form">
            <form action="../login/loginSave.php" name="login" method="post">
                <fieldset>
                <legend class="blind">아이디와 비밀번호 입력해주세요</legend>
                    <input type="text" class="inputStyle" name="youEmail" placeholder="이메일을 입력해주세요!">
                    <input type="password" class="inputStyle" name="youPass" placeholder="비밀번호를 입력해주세요!">
                    <button type="submit" class="btnStyle">로그인</button>
                    <button class="btnStyle close">닫기</button>
                </fieldset>
            </form>
        </div>
        <div class="login__list">
            <ul>
                <li><a href="../login/idFind.php">아이디 찾기</a></li>
                <li><a href="../login/pwdFind.php">비밀번호 찾기</a></li>
                <li><a href="../join/conditions.php">회원가입</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //login__popup -->

<script>
    // 로그인 버튼
    // document.querySelector(".icon__box .login").addEventListener("click", () => {
    //     document.querySelector(".login__popup").style.display = "block"
    // });
    document.querySelector(".m__btn").addEventListener("click", () => {
        document.querySelector(".login__popup").style.display = "block";
    });
</script>