<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo "os valores passados foram $n1 e $n2 <br/>";
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
            echo "O resultado sera $r"

        ?>
    </div>
</body>
</html>