<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>

<body>
    <pre>

        <?php
        require_once("Lutador.php");
        $lutador = array();
        $lutador[] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $lutador[] = new Lutador("Putsscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutador[] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutador[] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

        print_r($lutador);
        $lutador[0]->apresentar();
        $lutador[4]->status();
        ?>
</pre>
</body>

</html>