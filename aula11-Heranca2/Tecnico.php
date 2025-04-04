<?php
require_once("Aluno.php");

class Tecnico{
    protected $registroProfissional;

    public function getResgistroProfissional(){
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($int){
        $this->registroProfissional = $int;
    }

    public function praticar(){
        
    }
}