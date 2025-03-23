<?php
class Banco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    // METODOS GETTERS E SETTERS
    public function setNumConta($n)
    {
        $this->numConta = $n;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono($nome)
    {
        $this->dono = $nome;
    }
    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo($valorSaldo)
    {
        $this->saldo = $valorSaldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }

    //METODOS E AÇÕES DA CONTA

    public function abrirConta($tipoConta)
    {
        $this->setTipo($tipoConta);
        $this->setStatus(true);

        switch ($tipoConta) {
            case "CC":
                $this->setSaldo(50);
                break;
            case "CP":
                $this->setSaldo(150);
                break;
            default:
                echo "Tipo de conta inválida!";
                break;
        }
    }
    public function fecharConta() {
        if($this->getSaldo() > 0){
            echo "Saldo pendente a ser retirado";
        } elseif($this->getSaldo() < 0){
            echo "É preciso pagar débito pendente!";
        }else{
            echo "Conta " . $this->getNumConta() . " encerrada com sucesso";
            $this->setStatus(false);
        }
    }
    public function depositar($valorDepo) {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valorDepo);
            echo "Deposito realizado na conta " . $this->getDono() . "<br>";
        } else{
            echo "Esta conta está inativa\n Saldo ou depósito desativados";
        }
    }
    public function sacar($saque) {
        if($this->getStatus()){
            if($this->getSaldo() >= $saque){
                $this->setSaldo($this->getSaldo() - $saque);
                echo "Saque autorizado na conta " . $this->getNumConta();
            } else{
                echo "Saldo insuficiente!<br>Saque: " . number_format($saque, 2, ",", ".") . "<br>Saldo atual: " . number_format($this->getSaldo(), 2, ",", ".");
            }
        } else{
            echo "Conta fechada! ";
        }
    }
    public function pagarMensal() {
        $valorCobrado = 0;
        if($this->getTipo() == "CC"){
            $valorCobrado = 12;
        }elseif($this->getTipo() == "CP"){
            $valorCobrado = 20;
        }
        if($this->getStatus()){
            if($this->getSaldo() > $valorCobrado){
                $this->setSaldo($this->getSaldo() - $valorCobrado);
                "Mensalidade de $valorCobrado debitado de " . $this->getDono() . "<br>";
            } else{
                echo "Saldo insuficiente";
            }
        } else{
            echo "Impossível sacar! Conta Inativa";
        }
    }
}