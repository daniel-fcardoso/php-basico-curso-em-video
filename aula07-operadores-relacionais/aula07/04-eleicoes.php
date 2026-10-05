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
            $ano = $_GET["an"];
            $idade = 2026 - $ano;
            echo "Quem nasceu em $ano tem idade $idade anos";
            $tipo = ($idade>=18 && $idade<=65)? "OBRIGATORIO" : "NAO OBRIGATORIO";
            echo "E dessa forma seu voto e $tipo";
        ?>
    </div>
</body>
</html>