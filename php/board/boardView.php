<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

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
        <div class="intro__inner center">
            <picture class="intro__images small">
                <source srcset="../assets/img/board01.png, ../assets/img/board01@2x.png 2x, ../assets/img/board01@3x.png 3x" />
                <img src="../assets/img/board01.png" alt="게시판 이미지">
            </picture>
            <h2>게시글 보기</h2>
            <p class="intro__text">
                웹 디자이너, 웹 퍼블리셔, 프론트 엔드 개발자를 위한 게시판입니다.<br>
                관련된 문의사항은 여기서 확인하세요!
            </p> 
        </div>
        <!-- intro__inner -->

        <div class="board__inner">
            <div class="board__view">
                <table>
                    <colgroup>
                        <col style="width: 20%">
                        <col style="width: 80%">  
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>코딩 쉽게 배우는 방법!!!</td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td>신동진</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023-04-24</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>100</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>
                                코딩 쉽게 배우는 방법!!!<br><br>

                                1. 컴퓨터 과학 기초 지식 습득: 프로그래밍 언어를 배우기 전에 컴퓨터 과학 기초 지식을 습득하는 것이 중요합니다. 이에는 컴퓨터의 작동 원리, 알고리즘, 데이터 구조 등이 포함됩니다. 이러한 기초적인 지식을 습득하면 프로그래밍 언어를 배우는데 큰 도움이 됩니다.<br>
                                2. 프로그래밍 언어 선택: 코딩을 배우는 가장 일반적인 방법은 프로그래밍 언어를 배우는 것입니다. 많은 프로그래밍 언어 중에서는 Python, Java, C++, JavaScript 등이 널리 사용됩니다. 이 중에서 자신이 배우고 싶은 언어를 선택하고 해당 언어의 문법과 기초 지식을 습득하는 것이 좋습니다.<br>
                                3. 온라인 자료 활용: 온라인에는 다양한 코딩 학습 자료가 있습니다. 강의, 튜토리얼, 문제 풀이 사이트 등을 활용하여 코딩을 배울 수 있습니다. 각 언어별로 제공되는 공식 문서와 레퍼런스를 참고하여 배우는 것도 좋은 방법입니다.<br>
                                4. 코딩 연습: 코딩을 배운 후에는 많은 연습이 필요합니다. 간단한 예제부터 시작하여 점점 어려운 문제를 해결해 나가는 것이 좋습니다. 이를 통해 코딩 스킬을 향상시킬 수 있습니다.<br>
                                5. 프로젝트 수행: 프로그래밍 언어를 배운 후, 개인 프로젝트를 수행하는 것이 좋습니다. 이를 통해 배운 지식을 실제로 적용하고, 문제를 해결하는 경험을 쌓을 수 있습니다.<br>
                                6. 지속적인 학습: 코딩을 배우는 것은 끊임없는 학습과 발전이 필요합니다. 새로운 기술이나 프레임워크가 나타날 때마다 학습하고 적용해 나가는 것이 좋습니다.
                            </td>
                        </tr> -->
<?php
    $boardID = $_GET['boardID'];

    // 보드 뷰 + 1
    $sql = "UPDATE board SET boardView = boardView + 1 WHERE boardID = {$boardID}";
    $connect -> query($sql);

    if(isset($_GET['boardID'])) {
        $boardID = $_GET['boardID'];
    
        $sql = "SELECT b.boardContents, b.boardTitle, b.memberID, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
        $result = $connect -> query($sql);
    
        if($result){
            $info = $result -> fetch_array(MYSQLI_ASSOC);
    
            echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
            echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
            echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
            echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
            echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
?>
                    </tbody>
                </table>
            </div>
            <div class="board__btn mb100">
<?php 
    if(isset($_SESSION['memberID'])) {
        if(isset($_GET['boardID']) && $info['memberID'] == $_SESSION['memberID']): ?>
            <a href="boardModify.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3">수정하기</a>
            <a href="boardRemove.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3" onclick="return confirm('정말 삭제하시겠습니까?', '')">삭제하기</a>
        <?php endif; 
    }
?>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>