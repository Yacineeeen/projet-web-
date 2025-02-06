<?php

require '../config.php';

class CommentaireC
{
    function addCommentaire($commentaire)
    {
        $sql = "INSERT INTO commentaire (id_pub, nom_auteur, contenu_com) VALUES (:id_pub, :nom_auteur, :contenu_com)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_pub' => $commentaire->getIdpubb(),
                'nom_auteur' => $commentaire->getnomauteur(),
                'contenu_com' => $commentaire->getcontenu_com(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function recupererCommentaires($id_publication)
    {
        $sql = "SELECT * FROM commentaire WHERE id_pub = :id_pub";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_pub' => $id_pub]);
            $commentaire = $query->fetchAll(PDO::FETCH_ASSOC);
            return $commentaires;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function supprimerCommentaire($id_com) {
        $sql = "DELETE FROM Commentaire WHERE id = :id_com";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id_com', $id_Com);
            $query->execute();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // You can add more functions as needed, such as updateCommentaire, deleteCommentaire, etc.
}
?>