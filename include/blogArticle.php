<?php
    include "../connect/connect.php";

    if(isset($_GET['category'])){
        $category = $_GET['category'];
    }

    $categorySql = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = '$category' AND blogID != '$excludeBlogID' ORDER BY blogID DESC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;
?>

<div class="cards__inner col4 line0">
<?php foreach($categoryResult as $blog){ ?>
    <div class="card">
        <figure class="card__img">
            <a href="blogView.php?blogID=<?= $blog['blogID']?>">
                <img src="../assets/blog/<?= $blog['blogImgFile'] ?>" alt="<?= $blog['blogTitle'] ?>">
            </a>
        </figure>
        <div class="card__title">
            <h3><a href="blogView.php?blogID=<?= $blog['blogID']?>"><?= $blog['blogTitle'] ?></a></h3>
        </div>
    </div>
<?php } ?>
</div>