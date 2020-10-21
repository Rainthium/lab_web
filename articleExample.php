<?php

require "vendor/common.php";

// Предполагается что эту строчку мы взяли из БД и хотим сделать из неё содержание
$articleContent = '<h1 class="chapter" id="chapter1">Заголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            <h1 class="chapter" id="chapter2">ПодЗаголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            <h1 class="chapter" id="chapter3">ПодПодЗаголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            <h1 class="chapter" id="chapter4">ПодПодПодЗаголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            <h1 class="chapter" id="chapter5">ПодПодПодПодЗаголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            <h1 class="chapter" id="chapter6">ПодПодПодПодПодЗаголовок</h1>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>
            Всякий текст<br>'

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


    <title>Первая лаба :)</title>
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
                <div class="input-group-append">
                    <button class="btn btn-outline-success active" type="submit">Поиск</button>
                </div>
            </div>
        </form>

        <div class="m-2"></div>
        <div class="btn-group">
            <a href="profile.php" class="btn btn-light active" role="button" aria-pressed="true">Профиль</a>
            <div class="bth-group-append">
                <img src="<?= $_SESSION['user']['avatar'] ?>" width="38" height="38" class="d-inline-block" alt="" loading="lazy">
            </div>
        </div>
    </div>
</nav>

<!--      Основная часть сайта-->
<div class="row flex-nowrap mr-0">

    <!--    Тут левая колонка сайта-->
    <div class="col-auto d-none d-md-block pr-0 ">
        <div class="btn-group-vertical text-center">
            <button type="button" class="btn btn-dark btn-block rounded-0">Популярное</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Знаменитости</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Политика</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Психология</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Кино</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Здоровье</button>
            <button type="button" class="btn btn-dark btn-block rounded-0">Техника</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown"
                        style="border-radius: 0 0 0.5rem 0;">
                    Еще 5 интересов
                </button>
                <div class="dropdown-menu bg-dark text-center" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item bg-dark" style="color: linen" href="#">IT</a>
                    <a class="dropdown-item bg-dark" style="color: linen" href="#">Экономика</a>
                    <a class="dropdown-item bg-dark" style="color: linen" href="#">Отношения</a>
                    <a class="dropdown-item bg-dark" style="color: linen" href="#">Искусство</a>
                    <a class="dropdown-item bg-dark" style="color: linen" href="#">Наука</a>
                </div>
            </div>
        </div>

        <div>
            <a class="nav-link w-100 font-weight-light font-italic text-center" href="#"><strong>Рекламодателям</strong></a>
            <a class="nav-link w-100 font-weight-light font-italic text-center" href="about.php"><strong>О
                сервисе</strong></a>
        </div>
    </div>

    <!--    Правая колонка сайта-->
    <div class="col">
        <h3 class="mt-3 ml-3 mb-3"><strong>Популярные статьи на основе ваших интересов</strong></h3>

        <!--              КАРТОЧКИ-->
        <div class="container-fluid mb-5">
            <h1>Содержание:</h1>
            <?php
                // Генерируем содержание статьи с помощью содержания статьи из БД
                echo generateContent($articleContent);
            ?>
        </div>
        <div class="container-fluid mt-5" id="article">
            <?php
                // Вставляем содержание статьи из БД
                echo $articleContent;
            ?>
        </div>
    </div>
</div>

</body>

</html>
