<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampado;

    public function rabiscar()
    {
        if ($this->tampado) {
            echo "A caneta está tampada, não foi possível rabiscar tudo :(";
        } else {
            echo "Estou rabiscando tudo!";
        }
    }

    public function tampar()
    {
        $this->tampado = true;
    }

    public function destampar()
    {
        $this->tampado = false;
    }
}
