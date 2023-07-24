<?php
    include "../connect/connect.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    }

    $categorySql = "SELECT * FROM uBlog WHERE uBlogDelete = 0 AND uBlogCategory = '$category' AND uBlogID != '$excludeBlogID' ORDER BY uBlogID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
?>

<div class="cards__inner col4 line0">
<?php foreach($categoryResult as $blog){ ?>
    <div class="card">
        <figure class="card__img">
            <a href="blogView.php?uBlogID=<?= $blog['uBlogID']?>">
                <img src="../assets/blog/<?= $blog['uBlogImgFile'] ?>" alt="<?= $blog['uBlogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><a href="blogView.php?uBlogID=<?= $blog['uBlogID']?>"><?= $blog['uBlogTitle'] ?></a></h3>
        </div>
    </div>
<?php } ?>
</div>