<?php
require_once("AcoesVideo.php");
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getTitulo(){
        return $this->titulo;
    }

    public function setAvaliacao($a){
        $this->avaliacao = $a;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setViews($v){
        $this->views = $v;
    }
    public function getViews(){
        return $this->views;
    }

    public function setCurtidas($c){
        $this->curtidas = $c;
    }
    public function getCurtidas(){
        return $this-> curtidas;
    }

    public function setReproduzindo($bool){
        $this->reproduzindo = $bool;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    public function play(){
        $this->setReproduzindo(true);
    }
    public function pause()
    {
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->setCurtidas($this->getCurtidas() + 1);
    }
}