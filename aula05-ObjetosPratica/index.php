<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco PHP</title>
</head>
<body>
    <?php
        require_once("Banco.php");
        $carlos = new Banco();
        $claudia = new Banco();

        $carlos->abrirConta("CC");
        $carlos->setDono("Carlos");
        $carlos->setNumConta(1945);
        $carlos->depositar(300);
        $carlos->pagarMensal();
        $carlos->sacar(4000.60);

        $carlos->sacar(338);
        $carlos->fecharConta();
        
        $claudia->abrirConta("CP");
        $claudia->setDono("Claudia");
        $claudia->setNumConta(9002);
        $claudia->depositar(500);
        $claudia->sacar(100);
        $claudia->pagarMensal();
        $claudia->sacar(5070.20);
        $claudia->sacar(530);
        $claudia->fecharConta();

        var_dump($carlos);
        var_dump($claudia);
    ?>
</body>
</html>