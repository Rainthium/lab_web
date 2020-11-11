<?php
session_start();
require_once 'connect.php';

$article_id = mysqli_real_escape_string($connect, $_POST['article_id']);

mysqli_query($connect, "DELETE FROM `articles` WHERE `articles`.`id` = '$article_id'");

header('Location: ../authorArticles.php?author_id=' . $_SESSION['user']['id']);
?>
