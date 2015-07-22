<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        My blog
    </title>
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
                <?php
                    if(!isset($_GET["id"])){
                        $id = 1;
                    } else
                    {
                        $id = $_GET["id"];
                    }
                    $result = mysqli_query($connect, "SELECT * FROM data WHERE id = '$id'") or die(mysqli_error($connect));
                    $data = mysqli_fetch_array($result);
                    do {
                        printf('
                            <div>
                                <h1>%s</h1>
                                <p>%s</p>
                            </div>
                        ',$data["title"],$data["desc"]);
                    }
                    while ($data = mysqli_fetch_array($result));
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