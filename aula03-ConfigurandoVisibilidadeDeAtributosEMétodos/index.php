<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando Visibilidade</title>
</head>
<body>
    <?php
    require_once("Caneta.php");
        $c1 = new Caneta;
        $c1->modelo = "Bic";
        $c1->cor = "Azul";

        var_dump($c1);
        $c1->rabiscar();
        $c1->tampar();
    var_dump($c1);
    $c1->destampar();
    var_dump($c1);
?>
</body>
</html>