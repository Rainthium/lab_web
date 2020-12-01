<?php
session_start();
if (array_key_exists('user', $_SESSION)) {
    header('Location: /profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <!--    <link rel="stylesheet" href="assets/css/main.css">-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

</head>
<body style="background-image: url('images/white-cubes.png');">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding-left: 16px">
    <a class="navbar-brand" href="">
        <img src="images/ikonka-gazeta.png" width="38" height="38" class="d-inline-block align-top " alt=""
             loading="lazy">
        Статьи.ру
    </a>
</nav>


<!-- Форма регистрации -->

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
        <div class="col-lg-6 col-md-10 col-sm-12">

            <div class=" mt-5"></div>
            <?php
            if (array_key_exists('message', $_SESSION)) {
                echo '<h5 class="btn btn-secondary btn-lg btn-block md-3 disabled"> ' . $_SESSION['message'] . ' </h5>';
            }
            unset($_SESSION['message']);
            ?>

            <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <h5 class="form-label">ФИО</h5>
                    <input type="text" class="form-control" name="full_name" placeholder="Введите свое полное имя">
                </div>
                <div class="mb-3">
                    <h5 class="form-label">Логин</h5>
                    <input type="text" class="form-control" name="login" required placeholder="Введите свой логин">
                    Логин должен содержать заглавные и строчные буквы, цифры.<br>
                    Длина пароля должна составлять не менее 6 символов.
                </div>
                <div class="mb-3">
                    <h5 class="form-label">Почта</h5>
                    <input type="email" class="form-control" name="email" placeholder="Введите адрес своей почты">
                </div>
                <h5 class="form-label">Изображение профиля</h5>
                <div class=" form-file mb-3">
                    <input type="file" class="form-file-input" name="avatar">
                    <label class="form-file-label">
                        <span class="form-file-text">Выберите изображение</span>
                        <span class="form-file-button">Поиск</span>
                    </label>
                </div>
                <div class="mb-3">
                    <h5 class="form-label">Пароль</h5>
                    <input type="password" class="form-control" name="password" required placeholder="Введите пароль">
                </div>
                <div class="mb-3">
                    <h5 class="form-label">Подтверждение пароля</h5>
                    <input type="password" class="form-control" name="password_confirm" required
                           placeholder="Подтвердите пароль">
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark btn-block" type="submit">Зарегистрироваться</button>
                </div>
                <h5 class="mb-5">
                    У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
                </h5>


                <div class="mb-5"></div>
            </form>
        </div>
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
    </div>
</div>
</body>
</html>