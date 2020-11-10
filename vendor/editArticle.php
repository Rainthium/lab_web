<?php
session_start();
require_once 'connect.php';

$article_id = mysqli_real_escape_string($connect, $_POST['idd']);
$title = mysqli_real_escape_string($connect, $_POST['title']);
$description = mysqli_real_escape_string($connect, $_POST['description']);
$link = mysqli_real_escape_string($connect, $_POST['link']);

if ($_FILES['avatar']['name']) {
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
} else {
    $check_user = mysqli_query($connect, "SELECT * FROM `articles` WHERE `id` = '$article_id'");
    $user = mysqli_fetch_assoc($check_user);
    $path = $user['image'];
}

mysqli_query($connect, "UPDATE `articles` SET `image` = '$path', `title` = '$title', `description` = '$description', `link` = '$link' WHERE `articles`.`id` = '$article_id'");

header('Location: ../authorArticles.php?author_id=' . $_SESSION['user']['id']);
?>
