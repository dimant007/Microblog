<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>My blog</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <a class="visible-xs" href="index.php"><img id="logo1" src="img/head.jpg"/></a>
        <a class="visible-lg visible-md visible-sm" href="index.php"><img id="logo2" src="img/head.jpg"/></a>
    </div>
    <div class="row">
        <div class="col-xs-12 content">
            <div class="row">
                <div class="col-sm-10 left">
                    <a href="create_post.php"><button type="button" class="btn btn-primary btn-lg btn-block">Create new article</button></a>
                    <?php
                        $result = mysqli_query($connect, "SELECT * FROM data") or die(mysqli_error($connect));
                        $data = mysqli_fetch_array($result);
                        do {
                            printf('
                                <div class="article">
                                    <img class="img_article img-thumbnail" src="img/images.jpg"/>
                                    <a class="title" href="#"><h2>%s</h2></a>
                                    <p>%s <a href="view.php?id=%s">Show full article</a></p>
                                    <div style="clear:both;"></div>
                                </div>
                            ',$data["title"],$data["m_desc"],$data["id"]);
                        }
                        while($data = mysqli_fetch_array($result));
                    ?>
                </div>
                <div class="col-sm-2 right_menu">
                        <a href="index.php">Главная</a>
                        <a href="#">Статьи</a>
                        <a href="#">Видео</a>
                        <a href="#">Фотографии</a>
                        <a href="#">Архив</a>
                        <a href="#">Обратная связь</a>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-xs-12 footer"><p style="text-align: center">My blog (с) 2015</p></div>
    </div>
</div>
</div>
</body>
</html>
