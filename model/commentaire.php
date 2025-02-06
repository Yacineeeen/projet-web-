<?php
class commentaire
{
    private ?int $id_com =0;
    private ?int $id_pub =0;
    private ?string $contenu_pub = null;
    private ?string $date_creation=null;
    private ?string $nom_auteur = null;

    public function __construct($id_com = null,$g, $n, $p, $a, $d)
    {
        $this->id_com = $id;
        $this->id_pub=$g;
        $this->contenu_com = $n;
        $this->date_creation = $p;
        $this->nom_auteur = $a;
    }


    public function getIdcom()
    {
        return $this->id_com;
    }


    public function getIdpubb()
    {
        return $this->id_pub;
    }


    public function setIdpubb($id_pub)
    {
        $this->id_pub= $id_pub;

        return $this;
    }
    public function getcontenu_com()
    {
        return $this->contenu_com;
    }


    public function setcontenu_com($contenu_com)
    {
        $this->contenu_com = $contenu_com;

        return $this;
    }
    public function getdatecom()
    {
        return $this->date_creation;
    }


    public function setdatecom($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getnomauteur()
    {
        return $this->nom_auteur;
    }


    public function setnomauteur($nom_auteur)
    {
        $this->nom_auteur = $nom_auteur;

        return $this;
    }
}
