<?php
require_once("Pessoa.php");
require_once("Publicacao.php");
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($ti, $au, $tp, $lei)
    {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($tp);
        $this->setLeitor($lei);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }

    public function setTitulo($t)
    {
        $this->titulo = $t;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setAutor($a)
    {
        $this->autor = $a;
    }
    public function getAutor()
    {
        return $this->autor;
    }

    public function setTotPaginas($tp)
    {
        $this->totPaginas = $tp;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setPagAtual($pa)
    {
        $this->pagAtual = $pa;
    }
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setAberto($bool)
    {
        $this->aberto = $bool;
    }
    public function getAberto()
    {
        return $this->aberto;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }

    public function detalhes() {
        echo "<p>--------------------------------------</p>";
        echo "<h1>Livro: " . $this->getTitulo() . "<h1>";
        echo "Total de páginas: " . $this->getTotPaginas();
        echo "<br>Sendo lido por " . $this->getLeitor()->getNome();
    }

    public function abrir(){
        if(!$this->getAberto()){
            echo "<br>Aberto";
            $this->setAberto(true);
        }
    }
    public function fechar(){
        if($this->getAberto()){
            echo "<br>Fechado";
            $this->setAberto(false);
        }
    }
    public function folhear($pagina){
        if($this->getAberto()){
            if($pagina > $this->getTotPaginas() || $pagina < 0){
                $this->setPagAtual(0);
            } else{
                $this->setPagAtual($pagina);
                echo "<br>Página " . $this->getPagAtual();
            }
        }else{
            echo "<br>O livro ainda esta fechado!";
        }
    }
    public function avancarPag(){
        if($this->getPagAtual() < $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "<br>Página " . $this->getPagAtual();
        }
    }
    public function voltarPag(){
        if($this->getPagAtual() > 0){
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "<br>Página " . $this->getPagAtual();
        }
    }
}
