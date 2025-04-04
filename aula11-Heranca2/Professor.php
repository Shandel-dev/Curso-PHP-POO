<?php
require_once("Pessoa.php");
class Professor extends Pessoa{
    protected $especialidade;
    protected $salario;

    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($string){
        $this->especialidade = $string;
    }

    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($double){
        $this->salario = $double;
    }

    public function receberAumento($valor){
        $this->setSalario($this->getSalario() + $valor);
    }
}