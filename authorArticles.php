<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require_once 'vendor/connect.php';
?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">


    <title>Статьи</title>
</head>

<body style="background-image: url('images/white-cubes.png');">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--    Тут шапка сайта-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding-left: 16px; padding-right: 16px">
    <a class="navbar-brand" href="articles.php">
        <img src="images/ikonka-gazeta.png" width="38" height="38" class="d-inline-block align-top" alt=""
             loading="lazy">
        Статьи.ру
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <!-- ul - Неупорядоченный список, li - его элемент. -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="articles.php">Статьи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="authors.php">Авторы</a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link active" href="#">Журналы</a>
            </li>
        </ul>
        <form class="form-inline mr-auto">
            <div class="input-group flex-nowrap">
                <input class="form-control" type="search" placeholder="Статья, автор, тема, журнал..."
                       style="min-width: 270px">
                <!--                <div class="input-group-append">-->
                <button class="btn btn-outline-success active" type="submit">Поиск</button>
                <!--                </div>-->
            </div>
        </form>

        <div class="m-2"></div>
        <div class="btn-group">
            <a href="profile.php" class="btn btn-light active" role="button" aria-pressed="true">Профиль</a>
            <div class="bth-group-append">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="38" height="38" class="d-inline-block" alt=""
                     loading="lazy">
            </div>
        </div>
    </div>
</nav>

<!--      Основная часть сайта-->
<div class="row flex-nowrap mr-0">

    <!--    Правая колонка сайта-->
    <div class="col">
        <h3 class="mt-3 ml-3 mb-3"><strong>Статьи пользователя</strong></h3>

        <!--              КАРТОЧКИ-->
        <div class="d-flex flex-wrap">

            <?php
            $res = mysqli_query($connect, "SELECT * FROM `articles` WHERE author_id=" . (int)$_GET['author_id']);
            while ($row = $res->fetch_assoc()) {
                echo '
                    <div class="card ml-3 mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="' . $row['image'] . '" style="width: 286px; height: 180px"
                             alt="Card image cap">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">' . $row['title'] . '</h5>
                            <p class="card-text flex-grow-1">' . $row['description'] . '</p>
                            <a href="' . $row['link'] . '" class="btn btn-dark">Перейти к статье</a>
                            ' . ($row['author_id'] == $_SESSION['user']['id'] ? '
                            <form action="/editArticle.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="article_id" class="form-control" value="' . $row['id'] . '">
                                <button class="btn btn-dark mt-1 w-100" type="submit">Редактировать статью</button>
                            </form>
                            <form action="/vendor/deleteArticle.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="article_id" class="form-control" value="' . $row['id'] . '">
                                <button class="btn btn-dark mt-1 w-100" type="submit">Удалить статью</button>
                            </form>
                            ' : '') . '
                        </div>
                    </div>
                    ';
            }
            ?>

        </div>
        <div class="d-flex justify-content-center">
            <div class="btn-group text-center mb-3" role="group">
                <button type="button" class="btn btn-dark">&lt;&lt;</button>
                <button type="button" class="btn btn-dark">1</button>
                <button type="button" class="btn btn-dark">2</button>
                <button type="button" class="btn btn-dark">3</button>
                <button type="button" class="btn btn-dark">4</button>
                <button type="button" class="btn btn-dark">5</button>
                <button type="button" class="btn btn-dark">6</button>
                <button type="button" class="btn btn-dark">7</button>
                <button type="button" class="btn btn-dark">>></button>
            </div>
        </div>
    </div>
</div>

</body>

</html>
