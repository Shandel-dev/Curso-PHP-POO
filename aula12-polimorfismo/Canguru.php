<?php
require_once("Mamifero.php");

class Canguru extends Mamifero{
    final public function usarBolsa(){
        echo "<p>Usando bolsa</p>";
    }
    public function locomover()
    {
        echo "<p>Canguru saltando</p>";
    }   
}