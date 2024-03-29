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
    <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
    <style>
        .ck-editor__editable { 
            height: 600px;
        }
    </style>

</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__search bmStyle">
            <h2>코딩 블로그 게시글 작성</h2>
            <p>코딩과 관련된 글을 작성할 수 있습니다.</p>
        </div>
        <div class="blog__inner">
            <div class="blog__write">
                <form action="blogWriteSave.php" name="blogWriteSave" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="uBlogCategory">카테고리</label>
                            <select name="uBlogCategory" id="uBlogCategory">
                                <option value="none">none</option>
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="react">react</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                                <option value="sdofjisa">sdofjisa</option>
                            </select>
                        </div>
                        <div>
                            <label for="uBlogTitle">제목</label>
                            <input type="text" id="uBlogTitle" name="uBlogTitle" class="inputStyle" required>
                        </div>
                        <div>
                            <label for="uBlogContents">내용</label>
                            <textarea name="uBlogContents" id="uBlogContents" rows="20" class="inputStyle" required></textarea>
                            <!-- <div id="editor"></div> -->
                            <!-- <textarea name="blogContents" id="editor" placeholder="내용을 입력해주세요."></textarea> -->
                        </div>
                        <div class="mt30">
                            <label for="uBlogFile">파일</label>
                            <input type="file" name="uBlogFile" id="uBlogFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, png, gif 파일만 넣을 수 있습니다. 이미지 용량은 1MG를 넘길 수 없습니다.">
                        </div>
                        <button type="submit" class="btnStyle3">저장하기</button>
                    </fieldset>
                </form>
            </div>           
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#editor' ), {
            language: "ko"
        } );
    </script>
    <!-- <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
    <script>
		const Editor = toastui.Editor;
	
		const editor = new Editor({
			  el: document.querySelector('#editor'),
			  height: '1000px',
			  initialEditType: 'markdown',
			  previewStyle: 'vertical'
			});
		
		seeHtml = function(){
			alert(editor.getHTML());
		}
		seeMd = function(){
			alert(editor.getMarkdown());
		}
	</script> -->
</body>
</html>