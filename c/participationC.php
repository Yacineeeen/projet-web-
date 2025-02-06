<?php

require '../config.php';

class participationC
{

    public function listpart()
    {
        $sql = "SELECT * FROM participation";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    


    function addpart($participation)
    {
        $sql = "INSERT INTO participation
        VALUES (NULL , :cin, :nomp ,:prep, :emailp, :telp )";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'cin' => $participation->getcin(),
                'nomp' => $participation->getnom(),
                'prep' => $participation->getprenom(),
                'emailp' => $participation->getgmail(),
                'telp' => $participation->gettel(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deletepart($cin)
    {
        $sql = "DELETE FROM participation WHERE cin= :cin";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin', $cin);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }



    function showpart($idp)
    {
        $sql = "SELECT * from participation where idp = $idp";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $participation = $query->fetch();
            return $participation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

   
}
