<?php

require "vendor/common.php";

// Предполагается что эту строчку мы взяли из БД и хотим сделать из неё содержание
$articleContent = '
<img src="images/articles/secondArticle/1.png" class="w-100">
Всем доброго времени суток! Это подборка лучших бесплатных программ (альтернатив платным) на все случаи жизни и для любых задач. Добавляйте в избранное, чтобы не потерять, а ещё делитесь в социальных сетях. Не все айтишники. Не всем легко даётся запомнить такие вещи. Иногда банально подводит память. Статья будет полезна для всех.<br>
<br>
<h2 class="chapter">1. Google Chrome</h2>
<br>
Не смотря на свою репутацию пожирателя оперативной памяти, детище от корпорации Добра является лучших браузером на сегодняшний день. Кстати, некоторые проблемы ставшие мемами уже неактуальны. Добавив диспетчер задач и нейросеть, программа стала вести себя куда менее требовательно к системе, при этом быстродействие только выросло. Огромный магазин расширений, огромный функционал, темы, настройки. Если всё же Google Chrome не нравится, то можете попробовать: Opera, Microsoft Edge, Firefox.<br>
<br>
<h2 class="chapter">2. qBittorrent</h2>
<br>
Думаю все читающие эту статью пользуются торрентом. Кто-то фильмы с сериалами тянет, кто-то игры, кто-то книги или журналы. Не важно, задачи могут быть разными, а вот технология раздачи одна. Клиентов для торрента много, но почему-то во всех статьях или видео на 1 место ставят uTorrent. Он является «отцом», однако не является лучшим. Часто глюки, много рекламы, его надо настроить прежде чем можно будет нормально пользоваться. Для среднестатистического пользователя это сложно. Так что тут бесповоротно – qBittorrent. Бесплатно, без рекламы, лёгкий, быстрый.<br>
<br>
<h2 class="chapter">3. GIMP</h2>
<br>
Думаю, многие из вас не слышали о такой программе, как и я. Оказывается, есть бесплатная альтернатива, наступающая на пятки Adobe Photoshop. Также GIMP есть на Linux, если для кого-то это важно.<br>
<br>
<h2 class="chapter">4. 7-Zip</h2>
<br>
Я был сильно удивлён, когда несколько раз столкнулся с тем, что люди не могут открыть архив. Даже не знают КАК. Обычно архиватор вшит в Windows, но если вам не повезло, то можете воспользоваться 7-Zip.<br>
<br>
<img src="images/articles/secondArticle/2.png" class="w-100">
<br>
10 бесплатных программ для Windows, которые должны быть у каждого<br>
<br>
<h2 class="chapter">5. Foxit Reader</h2>
<br>
Теперь задачка посложнее. Что делать, если нужно открыть PDF? Можно установить Adobe Acrobat, но он платный. Можно открыть в Google Chrome, но там неудобное управление, крайне маленький функционал и просмотр. Для таких случаев рекомендую установить Foxit Reader. Маленькая шустрая программка.<br>
<br>
10 бесплатных программ для Windows, которые должны быть у каждого<br>
<br>
<img src="images/articles/secondArticle/3.png" class="w-100">
<br>
<h2 class="chapter">6. Malwarebytes AdwCleaner</h2>
<br>
Если вы пользуетесь антивирусом эта программа вам пригодится. Если вы не пользуетесь антивирусом, то эта программа ТЕМ БОЛЕЕ вам пригодится. Malwarebytes AdwCleaner очень мощный клинер от вирусов, троянов, снифферов…всего вредоносного ПО. Сам давно пользуюсь и вам рекомендую. К тому же бесплатно.<br>
<br>
<h2 class="chapter">7. LibreOffice</h2>
<br>
Ваш компьютер не тянет офисный пакет от Microsoft? Вам нужно работать с документами? А может начальство требует лицензию? Не беда. Можно пользоваться LibreOffice. Программа построена на открытом исходном коде, есть много расширений и поддержка русского языка. Правда раньше были периодически проблемы с разметкой. Если открывать таблицу созданную в Microsoft Office, строки съезжали. И наоборот. Так было не всегда, но было. Сейчас такого не замечаю. Вроде бы никто не жалуется. Скорее всего поправили.<br>
<br>
10 бесплатных программ для Windows, которые должны быть у каждого<br>
<br>
<img src="images/articles/secondArticle/4.png" class="w-100">
<br>
Ещё немного бесплатного ПО, которое в сети назвали «лучшим» и которым пользуюсь сам. Для полного пакета, так сказать.<br>
<br>
Лучший музыкальный плеер – AIMP<br>
<br>
Лучший видеоплеер – VLC<br>
<br>
Лучший мессенджер – Telegram<br>'

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


    <title>Статья :)</title>
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

    <!--    Правая колонка сайта-->
    <div class="col">


        <div class="container bg-light">
            <div class="row">
                <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
                <div class="col-lg-6 col-md-10 col-sm-12">

                    <div class="mb-5"></div>

                    <h1 class="chapter">10 бесплатных программ для Windows, которые должны быть у каждого</h1>

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
                    <div class="mb-5"></div>
                </div>
                <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
