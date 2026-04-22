<?php
require_once '../models/Article.php';

$article = new Article();
$articles = $article->readAll();
?>

<h2>Liste des articles</h2>

<a href="create.php">Ajouter</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Date</th>
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