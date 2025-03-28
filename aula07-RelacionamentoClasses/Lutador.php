<?php
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
        {
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria($this->getPeso());
        }

        public function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria($peso){
            if($peso < 52){
                $this->categoria = "Inválido";
            } elseif($peso <= 70.3){
                $this->categoria = "Leve";
            }elseif($peso <=83.9){
                $this->categoria = "Médio";
            }elseif($peso <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($empates){
            $this->empates = $empates;
        }

        //-----------------------------------------------------

        public function apresentar(){
            echo "<p>----------------------------------------</p>";
            echo "<p>CHEGOU A HORA! Lutador " . $this->getNome() . "<br>";
            echo "Origem" . $this->getNome() . "<br>";
            echo $this->getIdade() . " anos<br>";
            echo $this->getAltura() . " m de altura<br>";
            echo "Pesando " . $this->getPeso() . "Kg<br>";
            echo "Vitórias: " . $this->getVitorias() . ", Empates: " . $this->getEmpates() . ", Derrotas: " . $this->getDerrotas() . "</p><br>";
        }

        public function status(){
            echo "<p>-----------------------------------------------</p>";
            echo "<p>" . $this->getNome() . "<br>";
            echo "É um peso " . $this->getCategoria() . "!<br>";
            echo $this->getVitorias() . " vitórias!<br>";
            echo $this->getEmpates() . " empates!<br>";
            echo $this->getDerrotas() . " derrotas!</p><br>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
         public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
         }
         public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
         }

    }

?>