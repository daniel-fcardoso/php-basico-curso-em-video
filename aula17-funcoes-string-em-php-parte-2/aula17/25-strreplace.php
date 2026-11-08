<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $frase = "Gosto de estudar Matematica!!! Matematica e muito legal";
        $novaFrase = str_ireplace("matematica", "PHP", $frase);
        echo $novaFrase;
    ?>
</div>
</body>
</html>
 