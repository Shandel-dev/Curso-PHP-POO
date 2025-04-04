<?php
require_once("Aluno.php");
class Bolsista extends Aluno{
    protected $bolsa;
    
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($double){
        $this->bolsa = $double;
    }

    public function renovarBolsa(){
        echo "<p>Bolsa renovada!</p>";
    }
    
    //a sobrescrição é automatica quando inserimos um metodo de mesma assinatura que a da classe mãe
    public function pagarMensalidade(){             //sobrepõe o método de sua classe mãe que possui a mesma assinatura
        echo $this->getNome() . " é bolsista, então paga com desconto!";
    }
}