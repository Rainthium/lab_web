<?php
session_start();
require_once 'connect.php';

$article_id = mysqli_real_escape_string($connect, $_POST['article_id']);

$check_article = mysqli_query($connect, "SELECT * FROM `articles` WHERE `id` = '$article_id'");
$article = mysqli_fetch_assoc($check_article);

mysqli_query($connect, "DELETE FROM `articles` WHERE `articles`.`id` = '$article_id'");

unlink('../'.$article['image']);

header('Location: ../authorArticles.php?author_id=' . $_SESSION['user']['id']);
?>
