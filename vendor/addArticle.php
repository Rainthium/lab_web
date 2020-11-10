<?php
session_start();
require_once 'connect.php';

$author_id = mysqli_real_escape_string($connect, $_POST['idd']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$description = mysqli_real_escape_string($connect, $_POST['description']);
$link = mysqli_real_escape_string($connect, $_POST['link']);

if ($_FILES['avatar']['name']) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
} else {
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    $user = mysqli_fetch_assoc($check_user);
    $path = $user['avatar'];
}

mysqli_query($connect, "INSERT INTO `articles`(`author_id`, `image`, `title`, `description`, `link`) VALUES ('$author_id', '$path', '$title', '$description', '$link')");

header('Location: ../profile.php');
?>
