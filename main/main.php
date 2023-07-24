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
    <style>
        .board__wrap {
            width: 100%;
            padding: 50px 0;
        }
        .board__wrap h2 {
            display: inline-block;
            border: 1px solid var(--color__black);
            border-radius: 5px;
            font-size: 0.8em;
            padding: 0.1em 1em;
            margin-bottom: 1.6em;
        }
        .board__wrap h2:hover {
            background-color: var(--color__black);
            color: var(--color__white);
            cursor: grab;
        } 
        .board__wrap h2:hover a {
            background-color: var(--color__black);
            color: var(--color__white);
            cursor: grab;
        }
    </style>
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
                <h2><a href="../blog/blog.php">Blog</a></h2>
                <div class="cards__inner">
<?php
    $sql = "SELECT * FROM uBlog WHERE uBlogDelete = 0 ORDER BY uBlogID DESC LIMIT 8";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $uBlog){ ?>
    <div class="card">
        <figure class="card__img">
                <a href="../blog/blogView.php?uBlogID=<?= $uBlog['uBlogID']?>&category=<?= $uBlog['uBlogCategory']?>">
                <img src="../assets/blog/<?= $uBlog['uBlogImgFile'] ?>" alt="<?= $uBlog['uBlogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><?= $uBlog['uBlogTitle'] ?></h3>
            <p><?= htmlspecialchars_decode($uBlog['uBlogContents']) ?></p>
        </div>                        
        <div class="card__info">
            <a href="#" class="more">더보기</a href="#">
        </div>
    </div>
<?php } ?>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2><a href="">Popular Blog</a></h2>
                <div class="cards__inner col2 line2">
<?php
    $sql = "SELECT * FROM uBlog WHERE uBlogDelete = 0 ORDER BY uBlogView DESC LIMIT 4";
    $result = $connect -> query($sql);
?>

<?php foreach($result as $uBlog){ ?>
    <div class="card">
        <figure class="card__img">
                <a href="../blog/blogView.php?uBlogID=<?= $uBlog['uBlogID']?>&category=<?= $uBlog['uBlogCategory']?>">
                <img src="../assets/blog/<?= $uBlog['uBlogImgFile'] ?>" alt="<?= $uBlog['uBlogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><?= $uBlog['uBlogTitle'] ?></h3>
            <p><?= htmlspecialchars_decode($uBlog['uBlogContents']) ?></p>
        </div>                        
        <div class="card__info">
            <a href="#" class="more">더보기</a href="#">
        </div>
    </div>
<?php } ?>
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
                            <span class="author">dongjin</span>
                            <span class="date">2023.05.11</span>
                        </div>
                    </div> -->
                </div>
            </div>
            
                <div class="board__wrap">
                    <h2><a href="../board/board.php">Board</a></h2>
                    <div class="board__inner">
                        <div class="board__table">
                            <table>
                                <colgroup>
                                    <col style="width: 5%">
                                    <col>
                                    <col style="width: 10%">
                                    <col style="width: 15%">
                                    <col style="width: 7%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>등록자</th>
                                        <th>등록일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- <tr>
                                    <td>1</td>
                                    <td><a href="boardView.html">게시판 제목</a></td>
                                    <td>신동진</td>
                                    <td>2023-04-24</td>
                                    <td>100</td>
                                </tr> -->
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    // 1~20  DESC LIMIT 0,  20 --> page1 (viewNum * 1) - viewNum
    // 21~40 DESC LIMIT 20, 20 --> page2 (viewNum * 2) - viewNum
    // 41~60 DESC LIMIT 40, 20 --> page3 (viewNum * 3) - viewNum
    // 61~80 DESC LIMIT 60, 20 --> page4 (viewNum * 4) - viewNum

    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON (b.memberID = m.memberID) ORDER BY boardID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=0; $i<$count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>".$info['boardID']."</td>";
                echo "<td><a href='../board/boardView.php?boardID={$info['boardID']}'>".$info['boardTitle']."</a></td>";
                echo "<td>".$info['youName']."</td>";
                echo "<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo "<td>".$info['boardView']."</td>";
                echo "</tr>";
            }
        }  else {
            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
        }
    }
?>
                            </tbody>
                        </table>
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