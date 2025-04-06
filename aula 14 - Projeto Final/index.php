<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>

        <?php
    require_once("Video.php");
    require_once("Gafanhoto.php");
    require_once("Visualizacao.php");

    $v = array();
    $v[] = new Video("Python aula 1!");
    $v[] = new Video("PHP para iniciantes!");
    $v[] = new Video("Projeto Final de SQL");
    
    $l = array();
    $l[] = new Gafanhoto("Shandel", 18, "M", "Shand17");
    $l[] = new Gafanhoto("Barbara", 15, "F", "Pug_Master");
    $l[] = new Gafanhoto("Renan", 18, "M", "LiunKang12");
    print_r($l);

    $vis = array();
    $vis[] = new Visualizacao($v[0], $l[0]);
    $vis[] = new Visualizacao($v[1], $l[0]);
    $vis[0]->avaliar();
    $vis[1]->avaliarPorc(85);
    print_r($vis);
    print_r($v);
    ?>
    </pre>
</body>
</html>