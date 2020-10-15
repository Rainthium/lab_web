<?php
session_start();
require_once 'connect.php';

$name = $_POST['imya'];
$id = $_POST['idd'];
$email = $_POST['email'];

if ($_FILES['avatar']['name']) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
}
else
{
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    $user = mysqli_fetch_assoc($check_user);
    $path = $user['avatar'];
}
    mysqli_query($connect, "UPDATE `users` SET `full_name` = '$name', `email` = '$email', `avatar` = '$path' WHERE `users`.`id` = '$id'");

    $_SESSION['user'] = [
        "full_name" => $name,
        "id" => $id,
        "avatar" => $path,
        "email" => $email
    ];


header('Location: ../profile.php');
?>
