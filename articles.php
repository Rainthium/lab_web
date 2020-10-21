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
        <div class="d-flex flex-wrap">

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/Glacier National Park.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Ого как красиво!</h5>
                    <p class="card-text flex-grow-1">Кто-то приехал и увидел как тут красиво. Позвал свою семью и
                        отдохнули с шашлыками по-человечески.</p>
                    <a href="/article1.php" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/Log Horizon HD.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Новое аниме</h5>
                    <p class="card-text flex-grow-1">Японские мультики становятся все более популярными. Не знаем что
                        это за аниме, но оно бьет все рекорды!</p>
                    <a href="/article2.php" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/og_android1.png" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Жертва матанализа</h5>
                    <p class="card-text flex-grow-1">Так выглядит человек, решавший задания из Демидовича непрерывно на
                        протяжении трех дней!</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/Vintage Car.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Новая Tesla model Y</h5>
                    <p class="card-text flex-grow-1">Именно так по словам Илона Маска будет выглядеть новый кроссовер.
                        Подробнее о технических характеристиках...</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/photo.png" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Он ей ответил!</h5>
                    <p class="card-text flex-grow-1">Девушка попросила Храпова С.С. скинуть тему научной работы. Он ей
                        ответил!</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/ENf9DfmGGVo.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Вискас дорожает!</h5>
                    <p class="card-text flex-grow-1">Цена на вискас в магазине "Пятерочка" поднялась на 5 рублей. Что
                        думают коты по этому поводу?</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/K6B-aWN-fzg.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Обзор Pixel 4a</h5>
                    <p class="card-text flex-grow-1">Долгожданный обзор нового короля бюджетной фотографии. Стоит ли его
                        брать или гугл "растеряли" все полимеры?</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/6njTYbfSfGE.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Курение убивает!</h5>
                    <p class="card-text flex-grow-1">Вот так по словам британских ученых будет выглядеть курильщик после
                        70 миллионов сигарет.</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
                </div>
            </div>

            <div class="card ml-3 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="images/Zh2N2jtxA0s.jpg" style="width: 286px; height: 180px"
                     alt="Card image cap">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Долгожданная премьера</h5>
                    <p class="card-text flex-grow-1">Огромные сборы, грандизный успех, популярность актеров - это то,
                        чего никогда не будет у данной картины.</p>
                    <a href="#" class="btn btn-dark">Перейти к статье</a>
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
