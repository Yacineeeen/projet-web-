<?php

require '../config.php';

class eventC
{

    public function listevent()
    {
        $sql = "SELECT * FROM event  ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    


    function addevent($event)
    {
        $sql = "INSERT INTO event
        VALUES (NULL , :obj, :place ,:dh, :bud,:be ,:nbrp)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'obj' => $event->getobj(),
                'place' => $event->getplace(),
                'dh' => $event->getdh()->format('Y/m/d'),
                'bud' => $event->getbud(),
                'be' => $event->getbe(),
                'nbrp' => $event->getnbrp(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function deleteevent($ide)
    {
        $sql = "DELETE FROM event WHERE ide= :ide";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ide', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }



    function update($event, $ide)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE event SET 
                    obj = :obj, 
                    place = :place, 
                    dh = :dh, 
                    bud = :bud ,
                    be = :be ,
                    nbrp = :nbrp ,
                WHERE ide= :ide'
            );
            
            $query->execute([
                'ide' => $ide,
                'obj' => $event->getobj(),
                'place' => $event->getplace(),
                'dh' => $event->getdh()->format('Y/m/d'),
                'bud' => $event->getbud(),
                'be' => $event->getbe(),
                'nbrp' => $event->getnbrp(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showevent($ide)
    {
        $sql = "SELECT * from event where ide = $ide";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $event = $query->fetch();
            return $event;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

   
}