<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Polimorfismo</title>
</head>
<body>
    <pre>

        <?php
        require_once("Mamifero.php");
        require_once("Reptil.php");
        require_once("Ave.php");
        require_once("Peixe.php");
        
        require_once("Cachoro.php");
        require_once("Canguru.php");
        require_once("Tartaruga.php");
        require_once("Goldfish.php");

        
        $m = new Mamifero();
        $m->setIdade(14);
        $m->locomover();
        $m->alimentar();
        print_r($m);

        $a = new Ave();
        $a->setIdade(2);
        $a->locomover();
        $a->alimentar();
        print_r($a);
        
        $tar = new Tartaruga();
        $tar->locomover();
        print_r($tar);

        $rex = new Cachoro();
        $rex->emitirSom();
        ?>
        </pre>
</body>
</html>