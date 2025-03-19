<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php
        require_once("Caneta.php");

        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampado = true;

        $c2 = new Caneta;
        $c2->cor = "Roxo";
        $c2->ponta = 1.0;
        $c2->carga = 50;
        var_dump($c1);
        var_dump($c2);

        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();

        $c2->destampar();
        $c2->rabiscar();
    ?>
</body>
</html>