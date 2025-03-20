<?php
    class Caneta{
        public $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        public function __construct($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }

        public function tampar(){
            $this->tampada = true;
        }

    }
?>