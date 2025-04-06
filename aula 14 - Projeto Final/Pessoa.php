<?php
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->experiencia = 0;
    }

    public function ganharExp($exp) {
        $this->setExperiencia($this->getExperiencia() + $exp);
    }

    // Getter e Setter para Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Getter e Setter para Idade
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    // Getter e Setter para Sexo
    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    // Getter e Setter para Experiência
    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
}
