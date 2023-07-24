<div class="cate">
    <h4>최신 댓글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM uBlogComment WHERE commentDelete = 0 ORDER BY commentID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            // echo "<pre>";
            // var_dump($blogNewResult);
            // echo "</pre>";

            foreach($blogNewResult as $blog){?>
                <li>
                    <a href="blogView.php?uBlogID=<?= $blog['uBlogID'] ?>">
                        <span><?= $blog['commentName']?></span><br>
                        <span><?= $blog['commentMsg']?></span>
                    </a>
                </li>
        <?php } ?>
    </ul>
</div>