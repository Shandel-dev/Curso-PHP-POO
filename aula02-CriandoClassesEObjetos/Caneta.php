<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampado;

    function rabiscar()
    {
        if ($this->tampado) {
            echo "A caneta está tampada, não foi possível rabiscar tudo :(";
        } else {
            echo "Estou rabiscando tudo!";
        }
    }

    function tampar()
    {
        $this->tampado = true;
    }

    function destampar()
    {
        $this->tampado = false;
    }
}
