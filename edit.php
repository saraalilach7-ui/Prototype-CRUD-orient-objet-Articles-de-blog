<?php
require_once '../models/Article.php';

$article = new Article();
$data = $article->find($_GET['id']);
?>

<form action="../actions/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input type="text" name="titre" value="<?= $data['titre'] ?>"><br><br>

    <textarea name="contenu"><?= $data['contenu'] ?></textarea><br><br>

    <input type="date" name="date_pub" value="<?= $data['date_pub'] ?>"><br><br>

    <button type="submit">Modifier</button>
</form>