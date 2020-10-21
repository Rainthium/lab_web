<?php

require "vendor/common.php";

// Предполагается что эту строчку мы взяли из БД и хотим сделать из неё содержание
$articleContent = '
<img src="images/articles/thirdArticle/1.png" class="w-100"><br>
<br>
Каждый человек хотя бы несколько раз в своей жизни замечал крайне резкие изменения настроения у себя, а также у окружающих его людей. Можно даже подчеркнуть тот факт, что то настроение, в котором находишься сам, вдруг просто мгновенно проявляется у тех, кто рядом. Особенно, если настроение мрачное. И объясняется это энергетическим обменом между людьми.<br>
<br>
Для поддержания своей жизнедеятельности человек получает энергию из окружающего мира. Какую получит, такова и будет его жизнь. Питаясь свежими продуктами, хорошо отдыхая, занимаясь любимым делом, человек, конечно, будет полон сил и счастлив. Но этого недостаточно. Ведь человек не живет в вакуумном пространстве, он постоянно контактирует с другими представителями общества, и именно по этой причине может происходить отток энергии. Особенно сильный энергетический обмен происходит между близкими людьми, по крови или по духу. Совершенно чужие друг другу люди, как правило, общаются на равноценном энергетическом уровне.<br>
<br>
Почему через общение уходит энергия<br>
<br>
<img src="images/articles/thirdArticle/2.png" class="w-100"><br>
<br>
Существуют способы удержать потерю своей энергии и даже приумножить ее. Но знать их недостаточно, их нужно правильно и своевременно применять.<br>
<br>
<h2 class="chapter">Способы сохранения энергии</h2>
<br>
Сохранять спокойствие и позитивный настрой независимо от обстоятельств и окружающих людей.<br>
Нельзя поддаваться чувству злости, обиды, зависти и другим негативным эмоциям. Они несут разрушительный характер для самого человека, а также для окружающих.<br>
<br>
Заниматься делами, которые наполняют душу радостью, счастьем, приятными воспоминаниями.<br>
Необходимо часто общаться с живой природой, смотреть хорошие веселые фильмы, читать умные книги, находить время для общения с хорошими людьми.<br>
<br>
Совершать хорошие поступки.<br>
Оказывать помощь и заботу тем, кто в этом нуждается. Как говорится, если тебе плохо, то помоги тому, кому еще хуже…<br>
<br>
Но этого недостаточно. Существуют люди, которые осознанно или нет живут за счет энергии других людей. И называется это явление «энергетический вампиризм». Их можно поистине назвать носителями зла. Мало того, что они сами наполнены негативом, так они еще и живут за счет того, что провоцируют других людей проявлять свои эмоции в виде ответной агрессии. Человек отчетливо ощущает, что из него уходит энергия. Поэтому необходимо применять способы защиты для сохранения своей энергии при общении с такими людьми.<br>
<br>
Почему через общение уходит энергия<br>
<br>
<img src="images/articles/thirdArticle/3.png" class="w-100"><br>
<br>
<h2 class="chapter">Способы защиты от потери энергии</h2>
<br>
Мысленно оградить себя высокой стеной, представляя, как плохие слова и мысли других людей не способны ее пробить.<br>
По такому же принципу можно представить перед собеседником водопад, который уносит все плохое.<br>
Представив перед собой зеркало зеркальной поверхностью к человеку, можно быть уверенным, что оно все отзеркалит и вернет собеседнику обратно.<br>
Если это возможно, то желательно общение с такими людьми свести к минимуму, или прекратить его вовсе. Но это не всегда возможно, так как часто самыми сильными вампирами являются близкие родственники. Но свое энергетическое поле человек может поменять с отрицательного на положительное.<br>
<br>
Верующие люди миссию сохранения и восполнения своей положительной энергии, а значит своей благополучной жизни, возлагают на молитвы. Произнесение молитвенных слов очищает душу, гармонизирует пространство, наполняет сердце любовью.<br>
<br>
Любовь способна спасти не только одного человека от любого зла! Но разве кто-то сомневается, что любовь спасет мир?<br>'

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

                    <h1 class="chapter">Почему через общение уходит энергия</h1>

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
