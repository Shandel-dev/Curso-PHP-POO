<?php
require_once("Video.php");
require_once("Gafanhoto.php");

class Visualizacao{
    private $espectador;
    private $filme;

    public function __construct($video, $gafanhoto)
    {
        $this->setFilme($video);
        $this->setEspectador($gafanhoto);

        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function setEspectador($e){
        $this->espectador = $e;
    }
    public function getEspectador(){
        return $this->espectador;
    }

    public function setFilme($f){
        $this->filme = $f;
    }
    public function getFilme(){
        return $this->filme;
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if($porc < 20){
            $nova = 3;
        }elseif($porc <=50){
            $nova = 5;
        }elseif($porc <= 90){
            $nota = 8;
        }else{
            $nota = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    
}