<div class="cate list2">
    <h4>최신 글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM uBlog WHERE uBlogDelete = 0 ORDER BY uBlogID DESC LIMIT 4";
            $blogNewResult = $connect -> query($blogNew);

            // echo "<pre>";
            // var_dump($blogNewResult);
            // echo "</pre>";

            foreach($blogNewResult as $blog){?>
                <li>
                    <a href="blogView.php?uBlogID=<?= $blog['uBlogID'] ?>">
                        <img src="../assets/blog/<?= $blog['uBlogImgFile'] ?>" alt="<?= $blog['uBlogTitle'] ?>">
                        <span><?= $blog['uBlogTitle'] ?></span>
                    </a>
                </li>
        <?php } ?>
    </ul>
</div>