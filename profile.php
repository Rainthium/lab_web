<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
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
            <a href="/vendor/logout.php" class="logout btn btn-light active" role="button"
               aria-pressed="true">Выход</a>
            <div class="bth-group-append">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="38" height="38" class="d-inline-block" alt=""
                     loading="lazy">
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
        <div class="col-lg-6 col-md-10 col-sm-12">

            <form action="vendor/editdata.php" method="post" enctype="multipart/form-data">
                <h3 class="mt-3 mb-4"><strong>Личный кабинет</strong></h3>
                <h5 class="form-label mb-2">Имя пользователя:</h5>
                <input type="text" class="form-control mb-3" name="imya" placeholder="Введите имя пользователя"
                       value="<?= $_SESSION['user']['full_name'] ?>">
                <h5 class="form-label mb-2">Аватар пользователя:</h5>
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" height="200" alt="">
                <div class=" form-file mt-2 mb-3">
                    <input type="file" class="form-file-input" name="avatar">
                    <label class="form-file-label">
                        <span class="form-file-text">Изменить изображение</span>
                        <span class="form-file-button">Поиск</span>
                    </label>
                </div>
                <input type="hidden" name="idd" class="form-control"  value="<?= $_SESSION['user']['id'] ?>">
                <h5 class="mb-2">Email пользователя</h5>
                <input type="email" class="form-control mb-3" name="email" placeholder="Введите адрес своей почты"
                       value="<?= $_SESSION['user']['email'] ?>">
                <button class="btn btn-dark btn-block mb-5" type="submit">Изменить данные</button>
            </form>
        </div>
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
    </div>


</body>
</html>