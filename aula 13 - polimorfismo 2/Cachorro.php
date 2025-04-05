<?php
require_once("Lobo.php");
class Cachorro extends Lobo{
    public function emitirSom()
    {
        echo "<p>Au! Au! Au!</p>";
    }

    public function reagirFrase($frase){
        if($frase == "toma comida" || $frase == "Olá"){
            echo "<p>Abanar e latir</p>";
        }else{
            echo "Rosnar";
        }
    }
    public function reagirHoraMin($hora, $min){
        if($hora < 12){
            echo "Abanar";
        }elseif($hora > 18){
            echo "Ignorar";
        }else{
            echo "Abanar e latir alto";
        }
    }
    public function reagirDono($dono){
        if($dono == true){
            echo "Abanando de alegria";
        }else{
            echo "Cheira e vá embora";
        }
    }
    public function reagirIdadePeso($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo "Abanar";
            }else{
                echo "Latir";
            }
        }else{
            if($peso < 10){
                echo "Rosnar";
            }else{
                echo "Ignorar";
            }
        }
    }
}