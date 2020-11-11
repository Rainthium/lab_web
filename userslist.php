<?php
session_start();
if (!$_SESSION['user'] || $_SESSION['user']['id'] != 17) {
    header('Location: /');
}
require_once 'vendor/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <!--    <link rel="stylesheet" href="assets/css/main.css">-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

</head>
<body style="background-image: url('images/white-cubes.png');">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Профиль -->
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

<div class="container">
    <div class="mt-5"></div>
    <div class="row">
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
        <div class="col-lg-6 col-md-10 col-sm-12">
            <?php
            $res = mysqli_query($connect, "SELECT * FROM `users`");
            while ($row = $res->fetch_assoc()) {
                echo '

<!— Картинка профиля —>
<div class="row">
<div class="col-4">
<img src=' . $row['avatar'] . ' width="200" height="200" alt="">
</div>
<div class="col-auto">
<!— Данные профиля —>
<h3 class="card-text">' . $row['login'] . '</h3>
<h3 class="card-text">' . $row['full_name'] . '</h3>
<h3 class="card-text">' . $row['email'] . '</h3>
<a class="btn btn-dark btn-block mb-5" style="width: 400px" href="/authorArticles.php?author_id=' . $row['id'] . '">Посмотреть список статей</a>
</div>
</div>
<div class="mb-5"></div>
';
            }
            ?>
        </div>
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
    </div>
</div>
