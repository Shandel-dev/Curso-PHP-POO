<?php
require_once("Pessoa.php");
class Aluno extends Pessoa{
    protected $matricula;
    protected $curso;

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($int){
        $this->matricula = $int;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($string){
        $this->curso = $string;
    }

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno" . $this->getNome() . "</p>";
    }
}