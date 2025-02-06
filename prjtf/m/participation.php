<?php
class participation{
    private ?int $idp = null ;
    private ?int $cin = null;
    private ?string $nomp = null;
    private ?string $prep = null ;
    private ?string $emailp = null ;
    private ?int $telp = null ;
    //private ?int $ie = null ;
    

    public function __construct($idp = null,$cin , $nomp , $prep , $emailp , $telp ){
        $this->idp = $idp ;
        $this ->cin = $cin ;
        $this ->nomp = $nomp ;
        $this ->prep = $prep ;
        $this ->emailp = $emailp;
        $this ->telp = $telp;
        //$this ->ide = $ie;
    }

    public function getId()
    {
        return $this->idp;
    }
    public function getcin(){
        return $this ->cin ;
    }
    public function getnom(){
        return $this ->nomp ;
    }
    public function getprenom(){
        return $this ->prep ;
    }
    public function getgmail(){
        return $this ->emailp ;
    }
    public function gettel(){
        return $this ->telp;
    }/*
    public function getie(){
        return $this ->ide;
    }*/

    public function setcin(){
        $this->cin=$cin;
    }
    public function setnom(){
        $this->nomp=$nomp;
    }
    public function setprenom(){
        $this->prep=$prep;
    }
    public function setgmail(){
        $this->emailp=$emailp;
    }
    public function settel(){
        $this->telp=$telp;
    }
    /*public function setie(){
        $this->ide=$ie;
    }*/
}

?>
