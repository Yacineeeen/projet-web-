<?php
class event{
    private ?int $ide = null ;
    private ?string $obj = null;
    private ?string $place = null;
    private ?DateTime $dh = null ;
    private ?int $bud = null ;
    private ?string $be= null ;
    private ?int $nbrp= null ;
    

    public function __construct($ide = null,$obj , $place , $dh , $bud , $be , $nbrp){
        $this->ide = $ide ;
        $this ->obj = $obj ;
        $this ->place = $place ;
        $this ->dh = $dh ;
        $this ->bud = $bud ;
        $this ->be = $be;
        $this ->nbrp = $nbrp;
    }

    public function getId()
    {
        return $this->ide;
    }
    public function getobj(){
        return $this ->obj ;
    }
    public function getplace(){
        return $this ->place ;
    }
    public function getdh(){
        return $this ->dh ;
    }
    public function getbud(){
        return $this ->bud ;
    }
    public function getbe(){
        return $this ->be;
    }
    public function getnbrp(){
        return $this ->nbrp;
    }

    public function setobj(){
        $this->obj=$obj;
    }
    public function setplace(){
        $this->place=$place;
    }
    public function setdh(){
        $this->dh=$dh;
    }
    public function setbud(){
        $this->bud=$bud;
    }
    public function setbe(){
        $this->be=$be;
    }
    public function setnbrp(){
        $this->nbrp=$nbrp;
    }
}

?>