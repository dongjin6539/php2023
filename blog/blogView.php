<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <?php include "../include/head.php" ?>

</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__title">
            <span class="cate">카테고리 제목</span>
            <p class="title">블로그 게시글 타이틀</p>
            <div class="info">
                <span class="author">글쓴이</span>
                <span class="date">2023-05-16</span>
                <div class="modify">
                    <a href="#">수정</a>
                    <a href="#">삭제</a>
                </div>             
            </div>
        </div>
        <!-- //blog__title -->

        <div class="blog__inner">
           <div class="left mt70">                
                <div class="blog__contents">
                    <h3>블로그 제목</h3>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                    <p>블로그 내용</p>
                </div>
           </div>
           <div class="right mt70">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="assets/img/join02.png, assets/img/join02@2x.png 2x, assets/img/join02@3x.png 3x" />
                            <img src="assets/img/join02.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            열심히 노력해서 성공하는 사람이 되자!!!
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
                </div>
           </div>
        </div>
        <!-- //blog__inner -->

        <div class="blog__article">
            <h3>관련글</h3>
            <div class="cards__inner col4 line0">
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x" />
                        <a href="#" class="more"><img src="assets/img/blog01.jpg" alt="소개이미지"></a>
                    </figure>
                    <div class="card__title">
                        <h3>컴퓨터 과학 기초 지식 습득</h3>
                        <p>프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.</p>
                    </div>                        
                </div>
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog02.jpg, assets/img/blog02@2x.jpg 2x, assets/img/blog02@3x.jpg 3x" />
                        <a href="#" class="more"><img src="assets/img/blog02.jpg" alt="소개이미지"></a>
                    </figure>
                    <div class="card__title">
                        <h3>프로그래밍 언어 선택</h3>
                        <p>코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.</p>
                    </div>                        
                </div>
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg 2x, assets/img/blog03@3x.jpg 3x" />
                        <a href="#" class="more"><img src="assets/img/blog03.jpg" alt="소개이미지"></a>
                    </figure>
                    <div class="card__title">
                        <h3>온라인 자료 활용</h3>
                        <p>온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.</p>
                    </div>                        
                </div>
                <div class="card">
                    <figure class="card__img">
                        <source srcset="assets/img/blog04.jpg, assets/img/blog04@2x.jpg 2x, assets/img/blog04@3x.jpg 3x" />
                        <a href="#" class="more"><img src="assets/img/blog04.jpg" alt="소개이미지"></a>
                    </figure>
                    <div class="card__title">
                        <h3>코딩 연습</h3>
                        <p>코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.</p>
                    </div>                        
                </div>
            </div>
        </div>
        <!-- //blog__article -->
        
        <div class="blog__comment">
            <h3>댓글쓰기</h3>
            <div></div>
        </div>
        <!-- //blog__comment -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    
</body>
</html>