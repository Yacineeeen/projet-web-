<?php
include('../controller/config.php');

$sql = "SELECT * FROM publication ORDER BY date_pub DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['titre'] . "</h2>";
        echo "<p>" . $row['contenu'] . "</p>";
        echo "<p>Publié par : " . $row['auteur'] . " le " . $row['date_pub'] . "</p>";
        // Ajoutez ici le formulaire pour ajouter des commentaires
    }
} else {
    echo "Aucun article trouvé.";
}

$conn->close();
?>
