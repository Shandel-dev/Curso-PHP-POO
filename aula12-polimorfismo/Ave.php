<?php
require_once("Animal.php");
class Ave extends Animal{
    private $corPena;

    public function setCorPena($p){
        $this->corPena = $p;
    }
    public function getCorPena(){
        return $this->corPena;
    }

    public function fazerNinho(){
        echo "<p>Construiu um ninho</p>";
    }

    public function locomover()
    {
        echo "<p>Voando!</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de ave</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo Frutas</p>";
    }
}