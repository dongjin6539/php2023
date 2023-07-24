<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE uBlog (";
    $sql .= "uBlogID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned NOT NULL,";
    $sql .= "uBlogTitle varchar(255) NOT NULL,";
    $sql .= "uBlogContents longtext NOT NULL,";
    $sql .= "uBlogCategory varchar(40) NOT NULL,";
    $sql .= "uBlogAuthor varchar(40) NOT NULL,";
    $sql .= "uBlogView int(10) NOT NULL,";
    $sql .= "uBlogLike int(10) NOT NULL,";
    $sql .= "uBlogImgFile varchar(100) DEFAULT NULL,";
    $sql .= "uBlogImgSize varchar(100) DEFAULT NULL,";
    $sql .= "uBlogDelete int(10) NOT NULL,";
    $sql .= "uBlogRegTime int(10) NOT NULL,";
    $sql .= "uBlogModTime int(10) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (uBlogID)";
    $sql .= ") charset=utf8";

    $connect -> query($sql);
?>