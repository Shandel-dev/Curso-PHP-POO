<?php
require_once("Lutador.php");
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function setDesafiado($obj)
    {
        $this->desafiado = $obj;
    }
    public function getDesafiado()
    {
        return $this->desafiante;
    }

    public function setDesafiante($obj)
    {
        $this->desafiante = $obj;
    }
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setAprovada($bool)
    {
        $this->aprovada = $bool;
    }
    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome() . " venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante->getNome() . " vencey!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "Esta luta não pode acontecer!";
        }
    }
}
