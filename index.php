<?php
session_start();

if (array_key_exists('user', $_SESSION)) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <!--    <link rel="stylesheet" href="assets/css/main.css">-->
    <!--    Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body style="background-image: url('images/white-cubes.png');">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="">
        <img src="images/ikonka-gazeta.png" width="38" height="38" class="d-inline-block align-top" alt=""
             loading="lazy">
        Статьи.ру
    </a>
</nav>

<!-- Форма авторизации -->

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>
        <div class="col-lg-6 col-md-10 col-sm-12">

            <div class=" mt-5"></div>
            <?php
            if (array_key_exists('message', $_SESSION)) {
                echo '<h5 class="btn btn-secondary btn-lg btn-block mb-3 disabled"> ' . $_SESSION['message'] . ' </h5>';
            }
            unset($_SESSION['message']);
            ?>

            <form action="vendor/signin.php" method="post">
                <div class="mb-3">
                    <h5 class="form-label">Логин</h5>
                    <input type="text" class="form-control" name="login" required placeholder="Введите свой логин">
                </div>
                <div class="mb-3">
                    <h5 class="form-label">Пароль</h5>
                    <input type="password" class="form-control" name="password" required placeholder="Введите пароль">
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark btn-block" type="submit">Войти</button>
                </div>
                <h5 class="mb-3">
                    У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
                </h5>

                <div class="mb-5"></div>
            </form>
        </div>
        <div class="col-lg-3 col-md-1 d-none d-sm-block"></div>

</body>
</html>