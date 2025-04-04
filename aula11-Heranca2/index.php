<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança 2</title>
</head>
<body>
    <pre>

        <?php
        require("Aluno.php");
        require_once("Bolsista.php");

        $c1 = new Aluno();

        $c1->setNome("Shandel");
        $c1->setIdade(18);
        $c1->setCurso("Informática");

        print_r($c1);
        $c1->fazerAniversario();
        print_r($c1);

        $c2 = new Bolsista();

        $c2->setNome("Alex");
        $c2->setIdade(17);
        $c2->setCurso("Administração");
        $c2->setBolsa(13.5);
        print_r($c2);
        $c2->renovarBolsa();
    ?>
</pre>
</body>
</html>