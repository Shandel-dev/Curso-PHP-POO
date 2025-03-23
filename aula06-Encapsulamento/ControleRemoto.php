<?php
require_once("Controlador.php");

class ControleRemoto implements Controlador
{
    //ATRIBUTOS
    private $volume;
    private $ligado;
    private $tocando;

    //METODO CONSTRUTOR
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //METODOS SETTERS E GETTERS
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }
    private function getVolume()
    {
        return $this->volume;
    }

    private function setLigado($bool)
    {
        $this->ligado = $bool;
    }
    private function getLigado()
    {
        return $this->ligado;
    }

    private function setTocando($bool)
    {
        $this->tocando = $bool;
    }
    private function getTocando()
    {
        return $this->tocando;
    }

    //SOBRESCREVENDO METODOS DA INTERFACE
    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "-----Menu-----";
        echo "<br>Ligado: " . (($this->getLigado()) ? "Sim" : "Não") . "<br>";
        echo "Tocando: " . (($this->getTocando()) ? "Sim" : "Não ") . "<br>";
        echo "Volume: " . $this->getVolume() . " ";
        for($i = 1; $i <= $this->getVolume(); $i+=10){
            echo "| ";
        }
        echo "<br>";
    }

    public function fecharMenu() {
        echo "Fechando menu...";
    }

    public function maisVolume() {
        if($this->getLigado() && $this->getVolume() < 100){
            $this->setVolume($this->getVolume() + 5);
            echo "<br>+" . $this->getVolume();
        }
    }

    public function menosVolume() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - 5);
            echo "<br>-" . $this->getVolume();
        }
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
            echo "<br>Mudo...";
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(10);
            echo "<br>Volume: " . $this->getVolume();
        }
    }

    public function play() {
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}