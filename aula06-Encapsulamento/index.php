<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>

<body>
    <pre><?php
        require_once("ControleRemoto.php");
        $c = new ControleRemoto();

        $c->ligar();
        $c->abrirMenu();
        $c->fecharMenu();
        $c->ligar();
        // $c->desligar();
        $c->menosVolume();
        $c->maisVolume();
        $c->ligarMudo();
        $c->desligarMudo();
        ?>
    </pre>
</body>

</html>