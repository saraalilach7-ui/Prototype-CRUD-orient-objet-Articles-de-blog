<?php
require_once '../models/Article.php';

if (isset($_GET['id'])) {
    $article = new Article();
    $article->delete($_GET['id']);

    header("Location: ../views/index.php");
}