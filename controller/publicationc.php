<?php
class publication
{
    private ?int $id =0;
    private ?string $titre = null;
    private ?string $contenu= null;
    private ?string $date_pub=null;
    private ?string $auteur = null;

    public function __construct($id = null, $n, $p, $a, $d)
    {
        $this->id = $id;
        $this->titre = $n;
        $this->contenu = $p;
        $this->date_pub = $a;
        $this->auteur = $d;
    }


    public function getIdpub()
    {
        return $this->id;
    }


    public function gettitre()
    {
        return $this->titre;
    }


    public function settitre($nom)
    {
        $this->nom = $titre;

        return $this;
    }


    public function getcontenu()
    {
        return $this->contenu;
    }


    public function setcontenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }


    public function getdatepub()
    {
        return $this->date_pub;
    }


    public function setdatepub($date_pub)
    {
        $this->date_pub = $date_pub;

        return $this;
    }


    public function getauteur()
    {
        return $this->auteur;
    }


    public function setauteur($auteur)
    {
        $this->auteur = $autre;

        return $this;
    }
}
