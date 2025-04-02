<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <pre>

        <?php
        require_once("Pessoa.php");
        require_once("Aluno.php");
        require_once("Professor.php");
        require_once("Funcionario.php");

        $pe = array();
        $pe[] = new Aluno();
        $pe[] = new Professor();
        $pe[] = new Funcionario();
        $pe[] = new Pessoa();

        $pe[0]->setNome("Shandel");
        $pe[0]->setCurso("Informática");
        $pe[0]->cancelarMatricula();

        $pe[1]->setNome("João");
        $pe[1]->setSalario(12000);
        $pe[1]->receberAumento(400);

        $pe[2]->setNome("Carla");
        $pe[2]->setSetor("Secretaria");

        $pe[3]->setNome("Douglas");

        print_r($pe);
        ?>
</pre>
</body>

</html>