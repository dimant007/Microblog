<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
                    require_once 'login.php';
                    $db_server = mysqli_connect($db_hostname, $db_username, $db_password);

                    $fields = ['title', 'm_desc', 'desc'];

                    $dbFields = array_map(
                        function($elem) {
                            return "`$elem`";
                        }, $fields
                    );

                    if (!$db_server) die("Невозможно подключиться к MySQL: " . mysqli_error($db_server));

                    mysqli_select_db($db_server, $db_database)
                    or die("Невозможно выбрать базу данных: " . mysqli_error($db_server));

                    $data = array_reduce(
                        array_keys($_POST),
                        function($result, $elem) use ($fields, $_POST) {
                            if (in_array($elem, $fields, true)) {
                                $result[$elem] = $_POST[$elem];
                            }

                            return $result;
                        }
                    );

                    if (count($data) === count($fields)) {
                        $values = array_map(
                            function($elem) use ($fields, $db_server){
                                return "'".mysqli_real_escape_string($db_server, $elem)."'";
                            }, $data
                        );

                        $query = "INSERT INTO data (".implode(',',$dbFields).") VALUES (".implode(',', $values).")";
                        if (!mysqli_query($db_server, $query))
                            echo "Сбой при вставке данных: $query<br />" .
                                mysqli_error($db_server) . "<br /><br />";
                    }

                    ?>
                    <form action="create_post.php" method="post">
                    <?php foreach ($fields as $field) : ?>
                        <div>
                            <label for="<?= $field ?>"><?= ucfirst($field); ?></label>
                            <input type="text" class="form-control" placeholder="Text input" name="<?= $field ?>" id="<?= $field ?>">
                        </div>
                    <?php endforeach; ?>
                        <button type="submit" class="btn btn-default">ADD NEW RECORD</button>
                    </form>
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
        </div>
        <div class="row">
            <div class="col-xs-12 footer"><p style="text-align: center">My blog (с) 2015</p></div>
        </div>
</div>
</body>
</html>