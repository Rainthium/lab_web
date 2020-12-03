<?php

    session_start();
    require_once 'connect.php';

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($connect, $_POST['password_confirm']);

    if ($password !== $password_confirm) {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
        return;
    }

    if (strlen((string)$password) < 6)
    {
        $_SESSION['message'] = 'Пароль слишком короткий';
        header('Location: ../register.php');
        return;
    }

    if (1 !== preg_match('~[0-9]~', (string)$password))
    {
        $_SESSION['message'] = 'Пароль должен содержать хотя бы одну цифру';
        header('Location: ../register.php');
        return;
    }

    if (1 === preg_match('~[А-я]~', (string)$password))
    {
        $_SESSION['message'] = 'Пароль не должен содержать кириллицу';
        header('Location: ../register.php');
        return;
    }

    if (1 !== preg_match('~[A-Z]~', (string)$password) || 1 !== preg_match('~[a-z]~', (string)$password))
    {
        $_SESSION['message'] = 'Пароль должен содержать хотя бы одну заглавную и строчную букву';
        header('Location: ../register.php');
        return;
    }

    if ($_FILES['avatar']['name'] !== "") {
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            //header('Location: ../register.php');
            return;
        }
    }

    $password = md5($password);

    $result = mysqli_query($connect, "SELECT login FROM `users` WHERE login = '" . $login . "'");
    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION['message'] = 'Пользователь с таким логином уже существует';
        header('Location: ../register.php');
        return;
    }

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');

?>
