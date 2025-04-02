<?php
    require_once("Pessoa.php");
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function setEspecialidade($s){
            $this->especialidade = $s;
        }
        public function getEspecialide(){
            return $this->especialidade;
        }

        public function setSalario($int){
            $this->salario = $int;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function receberAumento($aumento){
            $this->setSalario($this->getSalario() + $aumento);
            echo "<p>O funcionário " . $this->getNome() . " recebeu um aumento de R$" . number_format($this->getSalario(), 2, ",", ".");
        }
    }

?>