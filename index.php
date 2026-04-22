<<<<<<< HEAD
<?php
require_once '../models/Article.php';

$article = new Article();
$articles = $article->readAll();
=======

<?php
require 'article.php';

$article1 = new Article();
$articles = $article1->readAll();
>>>>>>> 03799088879e7dcd61dc5951044edeca76cbb99f
?>

<h2>Liste des articles</h2>

<<<<<<< HEAD
<a href="create.php">Ajouter</a>

=======
>>>>>>> 03799088879e7dcd61dc5951044edeca76cbb99f
<table border="1">
<tr>
    <th>ID</th>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Date</th>
<<<<<<< HEAD
    <th>Actions</th>
</tr>

<?php foreach($articles as $a): ?>
<tr>
    <td><?= $a['id'] ?></td>
    <td><?= htmlspecialchars($a['titre']) ?></td>
    <td><?= htmlspecialchars($a['contenu']) ?></td>
    <td><?= $a['date_pub'] ?></td>
    <td>
        <a href="edit.php?id=<?= $a['id'] ?>">Modifier</a>
        <a href="../actions/delete.php?id=<?= $a['id'] ?>">Supprimer</a>
    </td>
</tr>
<?php endforeach; ?>

</table>
=======
</tr>

<?php foreach ($articles as $article): ?>
<tr>
    <td><?= htmlspecialchars($article['id']) ?></td>
    <td><?= htmlspecialchars($article['titre']) ?></td>
    <td><?= htmlspecialchars($article['contenu']) ?></td>
    <td><?= htmlspecialchars($article['date_pub']) ?></td>
</tr>
<?php endforeach; ?>

</table>














>>>>>>> 03799088879e7dcd61dc5951044edeca76cbb99f
