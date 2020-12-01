<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
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



    <title>Авторы</title>
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
        <form action="/search.php" method="get" class="form-inline mr-auto">
            <div class="input-group flex-nowrap">
                <input name="search" class="form-control" type="search" placeholder="Статья, автор, тема, журнал..."
                       style="min-width: 270px" value="<?php if(array_key_exists('search', $_GET)) echo mysqli_real_escape_string($connect, $_GET['search']); ?>">
                <!--                <div class="input-group-append">-->
                <button class="btn btn-outline-success active" type="submit">Поиск</button>
                <!--                </div>-->
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
        <!--                        Тут надо сделать так, чтобы эти ссылки двигались вниз экрана-->
        <div>
            <a class="nav-link w-100 font-weight-light font-italic text-center" href="#"><strong>Рекламодателям</strong></a>
            <a class="nav-link w-100 font-weight-light font-italic text-center" href="about.php"><strong>О
                сервисе</strong></a>
        </div>
    </div>

    <!--    Правая колонка сайта-->
    <div class="col">

        <!--КАРТОЧКИ-->

        <div class="container">
            <h3 class="mt-3 ml-3 mb-3"><strong>Популярные авторы на основе ваших интересов</strong></h3>
            <div class="row">
                <div class="col-lg-6">

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Дима Маслеников</h3>
                            <p class="card-text mt-2 mb-auto">Российский видеоблогер. Публикует статьи в таких жанрах,
                                как лайфхаки, охота за приведениями, а также осенью 2019 года завёл влоговый канал
                                Просто Масло.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/dima.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Артур Шарифов</h3>
                            <p class="card-text mt-2 mb-auto">Меня зовут Артур Шарифов. Мы с нашей командой делаем
                                познавательные статьи на интересные для нас темы.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/artur_sharifov.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Максим Монахов</h3>
                            <p class="card-text mt-2 mb-auto">Более известный как Мамикс, - российский автор. Он
                                публикует в своих журналах различные статьи, посвященные самоделкам и экспериментам.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/mamix.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Анонимус</h3>
                            <p class="card-text mt-2 mb-auto">Привет, мой друг! Если ты читаешь это, значит ты нашел то,
                                что ищешь. Заходи в мой профиль и почитай пару статей.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/anonymous.png" width="200" height="250" alt="...">
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Метагейм</h3>
                            <p class="card-text mt-2 mb-auto">В моем профиле вы можете найти, как серьезные, так и не
                                очень статьи по Dota 2.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/metagame.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Алексей Шевцов</h3>
                            <p class="card-text mt-2 mb-auto">Режу правду-матку. Заходи, однозначно найдешь что-то
                                полезное или веселое.<br>Сотрудничество itpedia@plaza.agency</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/shevcov.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Евгений Попадинец</h3>
                            <p class="card-text mt-2 mb-auto">Российский автор, спортсмен и актёр. Известен своими
                                разоблачениями конспирологических теорий, например «Вашингтонской карусели»,
                                «Филадельфийского эксперимента», предсказаний Ванги и Нострадамуса.</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/topa.png" width="200" height="250" alt="...">
                        </div>
                    </div>

                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                         style="max-height: 250px;">
                        <div class="col p-4 d-flex flex-column position-static bg-white">
                            <h3 class="mb-0">Вилсаком</h3>
                            <p class="card-text mt-2 mb-auto">Привет, тут у нас просто самый популярный журнал в России
                                о технологиях и жизни в ногу со временем. Вливайся!</p>
                            <a href="#" class="stretched-link">Перейти на страницу автора</a>
                        </div>
                        <div class="col-auto d-none d-xl-block bg-light">
                            <img src="images/authors/wilsacom.png" width="200" height="250" alt="...">
                        </div>
                    </div>


                </div>
            </div>
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
