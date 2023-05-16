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
    <title>PHP 블로그 만들기</title>

    <?php include "../include/head.php" ?>

</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                <img src="../assets/img/intro01.png" alt="소개이미지">
            </picture> 
            <p class="intro__text">
                처음으로 무엇을 하게 되면 노력하는 만큼 성과가 있다고 합니다. 처음 코딩에 입문하는 만큼 다른 사람들에게 뒤쳐지지 않게 최선을 다해서 노력하겟습니다.<br><br>
                프로그래밍은 무엇을 알고 있는가에 대한 것이 아니다. 그것은 당신이 무엇을 알아낼 수 있는 가에 대한 것이다. - 크리스 파인
            </p>
        </div>

        <div class="blog__inner">
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                            <img src="../assets/img/blog01.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>컴퓨터 과학 기초 지식 습득</h3>
                            <p>프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                            <img src="../assets/img/blog02.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로그래밍 언어 선택</h3>
                            <p>코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                            <img src="../assets/img/blog03.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>온라인 자료 활용</h3>
                            <p>온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                            <img src="../assets/img/blog04.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 연습</h3>
                            <p>코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col2 line2">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                            <img src="../assets/img/blog01.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>컴퓨터 과학 기초 지식 습득</h3>
                            <p>프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                            <img src="../assets/img/blog02.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로그래밍 언어 선택</h3>
                            <p>코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                            <img src="../assets/img/blog03.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>온라인 자료 활용</h3>
                            <p>온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                            <img src="../assets/img/blog04.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 연습</h3>
                            <p>코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col3 line3">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                            <img src="../assets/img/blog01.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>컴퓨터 과학 기초 지식 습득</h3>
                            <p>프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                            <img src="../assets/img/blog02.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로그래밍 언어 선택</h3>
                            <p>코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                            <img src="../assets/img/blog03.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>온라인 자료 활용</h3>
                            <p>온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                            <img src="../assets/img/blog04.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 연습</h3>
                            <p>코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog05.jpg, ../assets/img/blog05@2x.jpg 2x, ../assets/img/blog05@3x.jpg 3x" />
                            <img src="../assets/img/blog05.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로젝트 수행</h3>
                            <p>프로그래밍 언어를 배운 후, 개인 프로젝트를 수행하는 것이 좋습니다. 이를 통해 배운 지식을 실제로 적용하고, 문제를 해결하는 경험을 쌓을 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" />
                            <img src="../assets/img/blog06.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>지속적인 학습</h3>
                            <p>코딩을 배우는 것은 끊임없는 학습과 발전이 필요합니다. 새로운 기술이나 프레임워크가 나타날 때마다 학습하고 적용해 나가는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col6 line2">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog01.jpg, ../assets/img/blog01@2x.jpg 2x, ../assets/img/blog01@3x.jpg 3x" />
                            <img src="../assets/img/blog01.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>컴퓨터 과학 기초 지식 습득</h3>
                            <p>프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog02.jpg, ../assets/img/blog02@2x.jpg 2x, ../assets/img/blog02@3x.jpg 3x" />
                            <img src="../assets/img/blog02.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로그래밍 언어 선택</h3>
                            <p>코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog03.jpg, ../assets/img/blog03@2x.jpg 2x, ../assets/img/blog03@3x.jpg 3x" />
                            <img src="../assets/img/blog03.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>온라인 자료 활용</h3>
                            <p>온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog04.jpg, ../assets/img/blog04@2x.jpg 2x, ../assets/img/blog04@3x.jpg 3x" />
                            <img src="../assets/img/blog04.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 연습</h3>
                            <p>코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog05.jpg, ../assets/img/blog05@2x.jpg 2x, ../assets/img/blog05@3x.jpg 3x" />
                            <img src="../assets/img/blog05.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>프로젝트 수행</h3>
                            <p>프로그래밍 언어를 배운 후, 개인 프로젝트를 수행하는 것이 좋습니다. 이를 통해 배운 지식을 실제로 적용하고, 문제를 해결하는 경험을 쌓을 수 있습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="../assets/img/blog06.jpg, ../assets/img/blog06@2x.jpg 2x, ../assets/img/blog06@3x.jpg 3x" />
                            <img src="../assets/img/blog06.jpg" alt="소개이미지">
                        </figure>
                        <div class="card__title">
                            <h3>지속적인 학습</h3>
                            <p>코딩을 배우는 것은 끊임없는 학습과 발전이 필요합니다. 새로운 기술이나 프레임워크가 나타날 때마다 학습하고 적용해 나가는 것이 좋습니다.</p>
                        </div>                        
                        <div class="card__info">
                            <a href="#" class="more">더보기</a href="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
            <div class="intro__inner"></div> 각 페이지 소개 배너
            <div class="join__inner"></div> 회원가입 페이지
            <div class="login__inner"></div> 로그인 페이지
            <div class="board__inner"></div> 게시판 페이지
            <div class="blog__inner"></div> 블로그 메인

            <div class="slider__inner"></div> 
            <div class="banners__inner"></div> 
            <div class="cards__inner"></div> 
            <div class="images__inner"></div> 
            <div class="ads__inner"></div> 
            <div class="texts__inner"></div> 
         -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    
</body>
</html>