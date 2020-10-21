<?php

require "vendor/common.php";

// Предполагается что эту строчку мы взяли из БД и хотим сделать из неё содержание
$articleContent = '
Рад поприветствовать каждого!<br>
<br>
Главная отличительная черта всех порядочных дам - это высокие моральные принципы. К сожалению, встретить такую в настоящие дни большая редкость. Мой скромный совет: если уж попалась такая, то держись за неё всеми руками и ногами. Такие женщины сейчас на вес золота.<br>
<br>
Обратная ситуация - сейчас всё больше дамочек с низкой моралью. Иногда мне кажется, что их всех штампуют на каком-то заводе. Они везде - на работе, на улице, на сайтах знакомств. Иногда мелькает мысль, что это не с ними что-то не так, а я какой-то неправильный.<br>
<br>
<img src="images/articles/firstArticle/1.png" class="w-100">
<br>
5 признаков непорядочной девушки с низкой моралью<br>
К счастью, у всех девушек с низкими моральными принципами есть некоторые отличительные черты. Важно не зевать и вовремя выявлять эти признаки.<br>
<br>
<h2 class="chapter">1. Любовь к манипуляциям.</h2>
Девушки с низкой моралью обожают манипулировать. Им понравилась идея, что собственные потребности и желания можно удовлетворять за мужской счёт. Можете себе представить порядочную женщину, которая будет манипулировать и играть на чувствах? Вот и я думаю нет.<br>
<br>
Она всегда честна и открыта, как книга. Она не будет играть на чувствах и пытаться проворачивать игры в стиле:<br>
<br>
Почему ты мне не даришь новый телефон? Ты что, не мужик, не можешь позволить своей женщине подарок?<br>
<br>
<h2 class="chapter">2. Она хочет, чтобы мужчина её обеспечивал.</h2>
Среди женщин с низкими моральными принципами модно быть содержанкой. Пусть мужчина работает на двух работах и зарабатывает деньги, я же буду красиво жить за его счёт и всё тратить.<br>
<br>
Одно дело, если женщина сидит дома, готовит, убирает, нянчится с детьми и так далее. В этом ничего плохого нет. Но если дамочка вытягивает деньги, ничего не предлагая взамен кроме себя, красавицы, то нужно задуматься. Зачем вообще встречаться с такими?<br>
<br>
<h2 class="chapter">3. Любит обманывать.</h2>
Лично я не считаю, что враньё - это плохо. Мир не делится на чёрное и белое, и в каких-то ситуациях действительно лучше соврать, чем сказать правду. Я был свидетелем многих ситуаций, когда правдоруб горько расплачивался за свою искренность.<br>
<br>
Это не относится к недостойной девушке. Она готова врать по поводу и без. Сегодня она говорит одно, завтра другое, послезавтра вообще настаивает, что ничего не говорила. В её голове каша и она постоянно путается в показаниях. Если её поймать на лжи, ей не будет стыдно и она будет твёрдо стоять на своём.<br>
<br>
<h2 class="chapter">4. Негативно относится к мужчинам.</h2>
Такой вот парадокс. Девушки с низкой моралью любят жить за счёт мужчин, но вот к ним относятся с большим негативом.<br>
<br>
Всё вы одинаковые, нищеброды, неудачники, от вас нет ничего хорошего.<br>
Такая дамочка прошла через пяток-десяток отношений, и заранее настроена с негативом к очередному мужчине. Для неё он всего лишь ресурс, который можно и нужно использовать. Как только ресурс заканчивается, дамочка фыркает и уходит к другому.<br>
<br>
<h2 class="chapter">5. Слишком много внимания уделяет внешности.</h2>
Нет, мне очень нравятся красивые девушки, как и большинству моей аудитории. К сожалению, девушки с низкой моралью перегибают палку.<br>
<br>
Они тратят слишком много времени на то, чтобы привести себя в идеальный вид. Они тратят много денег (преимущественно чужих) на пластические операции. Они постоянно загружают новые фотографии в Инстаграм, приправляя их сотней фильтров и прочей обработкой. На их лице тонна не всегда уместной косметики, из-за чего такие девушки часто похожи на кукол. Адекватная девушка следит за собой, но без подобного фанатизма.<br>
<br>
<img src="images/articles/firstArticle/2.png" class="w-100">
<br>
Спасибо за внимание! Если вам есть что дополнить, то обязательно напишите свои мысли в комментарии! Подписывайтесь на канал, я буду рад видеть каждого!<br>
            '

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

    <!--    Правая колонка сайта-->
    <div class="col">


        <div class="container bg-light">
            <div class="row">
                <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
                <div class="col-lg-6 col-md-10 col-sm-12">

                    <div class="mb-5"></div>

                    <h1 class="chapter">5 признаков непорядочной девушки с низкой моралью</h1>

                    <div class="mb-5"></div>
                    <h2>Содержание:</h2>
                    <?php
                    // Вставляем содержание статьи из БД
                    $content = addHeaders($articleContent);
                    // Генерируем содержание статьи с помощью содержания статьи из БД
                    $titleContent = generateContent($content);

                    echo $titleContent;
                    ?>
                    <div class="mt-5"></div>
                    <div class="mb-5"></div>
                    <?php echo $content; ?>
                    </form>
                </div>
                <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
