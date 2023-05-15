<!DOCTYPE html>
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
                <span class="desc">아이디 비밀번호를 입력해주세요!</span>
            </div>
        </div>
        
        <div class="login__form">
            <fieldset>
                <legend class="blind">아이디와 비밀번호 입력해주세요</legend>
                <form action="loginSave.php" name="loginSave" method="post">
                    <input type="text" class="inputStyle" name="youEmail" placeholder="이메일을 입력해주세요!" required>
                    <input type="password" class="inputStyle" name="youPass" placeholder="비밀번호를 입력해주세요!" required>
                    
                    <button type="submit" class="btnStyle">로그인</button>
                    <button class="btnStyle">닫기</button>
                </form>

            </fieldset>
        </div>

        <div class="login__list">
            <ul>
                <li><a href="#">아이디 찾기</a></li>
                <li><a href="#">비밀번호 찾기</a></li>
                <li><a href="../join/conditions.php">회원가입</a></li>
            </ul>
        </div>
        
    </div>
</body>
</html>