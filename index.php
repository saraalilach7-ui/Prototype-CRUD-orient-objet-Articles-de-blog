
<?php
require 'article.php';

$article1 = new Article();
$articles = $article1->readAll();
?>

<h2>Liste des articles</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Titre</th>
    <th>Contenu</th>
    <th>Date</th>
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














