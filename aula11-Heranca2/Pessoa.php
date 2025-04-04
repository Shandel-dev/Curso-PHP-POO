<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($string){
            $this->nome = $string;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($int){
            $this->idade = $int;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($string){
            $this->sexo = $string;
        }

        public final function fazerAniversario(){
            $this->setIdade($this->getIdade() + 1);
            echo "Parabéns " . $this->getNome() . "!!! Você completou " . $this->getIdade() . " anos!";
        }
    }
?>