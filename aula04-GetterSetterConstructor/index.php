<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("Caneta.php");

    $c2 = new Caneta("Paint", "Vermelha", 1);

    //com interpolação
    echo "Temos uma caneta {$c2->getModelo()} de ponta {$c2->getPonta()}";
    var_dump($c2);

    ?>
</body>
</html>