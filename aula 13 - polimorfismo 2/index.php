<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo 2</title>
</head>
<body>
    <?php
    require_once("Animal.php");
    require_once("Mamifero.php");
    require_once("Lobo.php");
    require_once("Cachorro.php");

    $c1 = new Mamifero();
    $c1->emitirSom();

    $c2 = new Lobo();
    $c2->emitirSom();

    $c3 = new Cachorro();
    $c3->emitirSom();
    $c3->reagirDono(true);

    $c3->reagirDono(false);
    $c3->reagirFrase("Vai apanhar!");
    $c3->reagirIdadePeso(4, 8.50);
    $c3->reagirHoraMin(14, 38);
    
    ?>
</body>
</html>