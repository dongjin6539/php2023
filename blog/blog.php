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
    <title>블로그</title>

    <?php include "../include/head.php" ?>

</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__search bmStyle">
            <h2>코딩 블로그 입니다.</h2>
            <p>코딩과 관련된 글입니다.</p>
            <div class="search">
                <form action="#" name="#" method="post">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>
<?php if(isset($_SESSION['memberID'])){ ?>
<!-- 로그인 한 경우 -->
<a href="blogWrite.php" class="btnStyle4 white">글쓰기</a>
<?php } ?>
                </form>                        
            </div>
        </div>
        <div class="blog__inner">
           <div class="left">                
                <div class="blog__wrap">
                    <h2>All Posts</h2>
                    <div class="cards__inner col2 line2">
                        <!-- <div class="card">
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
                        </div> -->
                    
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $blog){ ?>
    <div class="card">
        <figure class="card__img">
                <a href="blogView.php?blogID=<?= $blog['blogID']?>&category=<?= $blog['blogCategory']?>">
                <img src="../assets/blog/<?= $blog['blogImgFile'] ?>" alt="<?= $blog['blogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><?= $blog['blogTitle'] ?></h3>
            <p><?= htmlspecialchars_decode($blog['blogContents']) ?></p>
        </div>                        
        <div class="card__info">
            <a href="#" class="more">더보기</a href="#">
        </div>
    </div>
<?php } ?>
                    </div>
                </div>
           </div>
           <div class="right">
                <div class="blog__aside">
                    <div class="blog__aside">
                        <?php include "../include/blogTitle.php" ?>

                        <?php include "../include/blogCate.php" ?>

                        <?php include "../include/blogNew.php" ?>

                        <?php include "../include/blogPopular.php" ?>

                        <?php include "../include/blogComment.php" ?>
                    </div>
                </div>
           </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    
</body>
</html>