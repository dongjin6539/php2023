<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    } else {
        Header("Location: blog.php");   
    }

    $categorySql = "SELECT * FROM uBlog WHERE uBlogDelete = 0 AND uBlogCategory = '$category' ORDER BY uBlogID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
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
        <div class="blog__search bmStyle">
            <?php if($categoryCount === 0){?>
                <h2><?= $category?></h2>
                <p><?= $category?>와 관련된 글이 <?= $categoryCount?>개 있습니다.</p>
            <?php } else {?>
                <h2><?= $categoryInfo['uBlogCategory']?></h2>
                <p><?= $categoryInfo['uBlogCategory']?>와 관련된 글이 <?= $categoryCount?>개 있습니다.</p>
            <?php } ?>
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
            <div class="left mt50">   
            <div class="blog__wrap">
                <div class="cards__inner col2 row line3">
<?php foreach($categoryResult as $uBlog){ ?>
    <div class="card">
        <figure class="card__img">
            <a href="blogView.php?uBlogID=<?= $uBlog['uBlogID']?>&category=<?= $uBlog['uBlogCategory']?>">
                <img src="../assets/blog/<?= $uBlog['uBlogImgFile'] ?>" alt="<?= $uBlog['uBlogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><a href="blogView.php?uBlogID=<?= $uBlog['uBlogID']?>"><?= $uBlog['uBlogTitle'] ?></a></h3>
            <p><?= htmlspecialchars_decode($uBlog['uBlogContents']) ?></p>
        </div>
    </div>
<?php } ?>
                    </div>
                </div>
           </div>
       <div class="right mt50">
                <div class="blog__aside">
                    <?php include "../include/blogTitle.php" ?>

                    <?php include "../include/blogCate.php" ?>

                    <?php include "../include/blogNew.php" ?>

                    <?php include "../include/blogPopular.php" ?>

                    <?php include "../include/blogComment.php" ?>
                </div>
           </div>
        </div>
        <!-- //blog__inner -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    
</body>
</html>