<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'Article</title>
</head>
<body>

    <h1>Ajout d'Article</h1>

    <form method="post" action="../controller/ajout_article.php"> <!-- Changer ici -->
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="contenu">Contenu :</label>
        <textarea id="contenu" name="contenu" required></textarea>

        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur" name="auteur" required>

        <input type="submit" value="Envoyer">
    </form>
<!-- Liste des articles -->
<h2>Liste des Articles</h2>
<?php include('../controller/afficher_article.php'); ?>

<!-- Formulaire de mise à jour d'article -->
<h2>Modifier un Article</h2>
<form method="post" action="../controller/modifier_article.php">
    <label for="pub_id_update">ID de l'article :</label>
    <input type="text" id="article_id_update" name="id_pub" required>

    <label for="nouveau_contenu">Nouveau Contenu :</label>
    <textarea id="nouveau_contenu" name="nouveau_contenu" required></textarea>

    <input type="submit" value="Mettre à Jour">
</form>

<!-- Formulaire de suppression d'article -->
<h2>Supprimer un Article</h2>
<form method="post" action="../controller/suprimmer_article.php">
    <label for="article_id_delete">ID de l'article :</label>
    <input type="text" id="article_id_delete" name="article_id" required>

    <input type="submit" value="Supprimer">
</form>
</body>
</html>