<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>

<body>
    <pre>

        <?php
        require_once("Pessoa.php");
        require_once("Livro.php");

        $pes = array();
        $pes[] = new Pessoa("Shandel", 18, "Masculino");
        $pes[] = new Pessoa("Barbara", 15, "Feminina");
        $pes[0]->fazerAniversário();
        $pes[0]->fazerAniversário();
        $pes[1]->fazerAniversário();
        $pes[1]->fazerAniversário();


        $li[] = array();

        $li[] = new Livro("Harry Potter", "J. K.", 283, $pes[1]);
        $li[] = new Livro("JoJo", "Araki", 33, $pes[0]);

        $li[1]->abrir();
        $li[1]->folhear(279);
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->avancarPag();
        $li[1]->fechar();
        $li[1]->detalhes();
        ?>
        </pre>
</body>

</html>