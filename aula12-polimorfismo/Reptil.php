<?php
    require_once("Animal.php");
    class Reptil extends Animal{
        private $corEscama;

        public function setCorEscama($s){
            $this->corEscama = $s;
        }
        public function getCorEscama(){
            return $this->corEscama;
        }

        //Métodos de sobreposição
        public function locomover()
        {
            echo "<p>Rastejando</p>";
        }
        public function alimentar()
        {
            echo "<p>Comendo Vegetais</p>";
        }
        public function emitirSom()
        {
            echo "<p>Som de Réptil</p>";
        }
    }
?>