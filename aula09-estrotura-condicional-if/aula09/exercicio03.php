<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style> 
        a {
            color: white;
            background-color: #273747;
        }

        span {
            color: darkred;
        }
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $media = ($nota1 + $nota2)/2;
        echo "A media entre <span>$nota1</span> e <span>$nota2</span> e igual a <span>$media</span> </br>";
        if ($media >= 7) {
            $situacao = "APROVADO";
        }
        elseif ($media >= 5 && $media < 7) {
            $situacao = "RECUPERACAO";
        }
        else {
            $situacao = "REPROVADO";
        }
        
        echo "Situacao do aluno: <span>$situacao</span> </br>" ;
    ?>
    <br><a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
 