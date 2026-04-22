<?php
require_once '../models/Article.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $article = new Article();
    $article->update(
        $_POST['id'],
        $_POST['titre'],
        $_POST['contenu'],
        $_POST['date_pub']
    );

    header("Location: ../views/index.php");
}