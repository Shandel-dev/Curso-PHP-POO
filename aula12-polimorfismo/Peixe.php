<?php
require_once("Animal.php");
class Peixe extends Animal{
    private $corEscama;

    public function setCorEscama($c){
        $this->corEscama = $c;
    }
    public function getCorEscama(){
        return $this->corEscama;
    }

    public function soltarBolha(){
        echo "<p>Soltou uma bolha</p>";
    }

    //SOBREPOSIÇÃO

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom()
    {
        echo "<p>Peixe não faz bolha</p>";
    }
}