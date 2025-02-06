<?php
include('../controller/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article_id = $_POST['id_pub'];
    $contenu = $_POST['contenu'];

    $sql = "UPDATE publication SET contenu='$contenu' WHERE id=$id_pub";

    if ($conn->query($sql) === TRUE) {
        echo "Article mis à jour avec succès";
    } else {
        echo "Erreur lors de la mise à jour de l'article : " . $conn->error;
    }
}

$conn->close();
?>
