<?php
require_once("Mamifero.php");
class Cachoro extends Mamifero{
    public function enterrarOsso(){
        echo "<p>Osso enterrado!</p>";
    }
    public function abanarRabo(){
        echo "<p>Abanando rabo</p>";
    }

    public function emitirSom()
    {
        echo "Latindo au! au! au!";
    }
}