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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Первая лаба :)</title>
</head>

<body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="articles.php">
        <img src="images/ikonka-gazeta.png" width="38" height="38" class="d-inline-block align-top " alt=""
             loading="lazy">
        Статьи.ру
    </a>
</nav>

<!--      Основная часть сайта-->
<div class="block-container">
    <div class="bg-dark block-about">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 mt-5">
                    <h1>Открывайте новое каждый день</h1>
                    <h3>Это платформа, которая подбирает контент специально для вас. Тут есть статьи на разные темы от
                        различных авторов и журналов.</h3>
                </div>
                <div class="col-6 d-none d-md-block mt-5">
                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active" data-interval="10000">
                                <img src="images/Log Horizon HD.jpg" class="d-block w-100 rounded" alt="..."
                                     style="width: 286px; height: 250px">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/Glacier National Park.jpg" class="d-block w-100 rounded" alt="..."
                                     style="width: 286px; height: 250px">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Vintage Car.jpg" class="d-block w-100 rounded" alt="..."
                                     style="width: 286px; height: 250px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light block-about">
        <div class="container">

            <h1>Ваш личный «Статьи.ру»</h1>
            <h3>«Статьи.ру» понимает ваши интересы и собирает ленту для вас. Он анализирует действия: что вы
                смотрите, кому ставите лайки, на кого подписываетесь, а после – рекомендует вам и уже любимых
                авторов, и ещё неизвестные, но интересные статьи.</h3>

            <div class="row">
                <div class="col-lg-4">
                    <!-- SVG блок, лучше держать свернутым -->
                    <div class="mt-5 mb-auto">
                        <img src="images/1_AKc9XCRWRDAZPuWurdHo_w.png" class="d-block w-100" alt="..."
                             style="width: 286px; height: 250px">
                        <div class="block-bubble mb-2">
                            Вы смотрите и ставите лайки
                        </div>
                        <b>Шаг 1</b>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- SVG блок, лучше держать свернутым -->
                    <div class="mt-5 mb-auto">
                        <img src="images/og_android1.png" class="d-block w-100" alt="..."
                             style="width: 286px; height: 250px">
                        <div class="block-bubble mb-2">
                            Алгоритм отслеживает это и подбирает контент
                        </div>
                        <b>Шаг 2</b>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mt-5 mb-auto">
                        <img src="images/photo.png" class="d-block w-100 rounded" alt="..."
                             style="width: 286px; height: 250px">
                        <div class="block-bubble mb-2">
                            Вы видите интересные именно вам материалы
                        </div>
                        <b>Шаг 3</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-info block-about">
        <h1 class="text-center">Спасибо что вы с нами!</h1>
    </div>
</div>

</body>

</html>
