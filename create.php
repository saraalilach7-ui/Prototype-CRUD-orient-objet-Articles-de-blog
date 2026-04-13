<?php
require 'Article.php';

$article = new Article();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $date = date("Y-m-d");

    if ($article->create($titre, $contenu, $date)) {
        header("Location: index.php");
        exit;
    } else {
        echo " Erreur lors de l'ajout";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Article</title>
</head>
<body>

<h2>Ajouter un article</h2>

<form method="POST" action="">
    
    <label>Titre :</label><br>
    <input type="text" name="titre" required><br><br>

    <label>Contenu :</label><br>
    <textarea name="contenu" required></textarea><br><br>

    <button type="submit">Ajouter</button>

</form>

</body>
</html>