<?php
require_once("Animal.php");
class Mamifero extends Animal2{
    protected $corPelo;

    public function emitirSom()
    {
        echo "<p>Som de mamifero</p>";
    }
}