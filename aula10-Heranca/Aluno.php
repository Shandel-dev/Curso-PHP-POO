<?php
    require_once("Pessoa.php");
    class Aluno extends Pessoa{
        private $matr;
        private $curso;

        public function setMatr($int){
            $this->matr = $int;
        }
        public function getMatr(){
            return $this->matr;
        }

        public function setCurso($s){
            $this->curso = $s;
        }
        public function getCurso(){
            return $this->curso;
        }

        public function cancelarMatricula(){
            echo "<p>A matrícula foi cancelada!</p>";
        }

    }
?>