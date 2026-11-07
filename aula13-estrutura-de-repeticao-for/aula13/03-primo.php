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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        echo "Analisando o numero $n... <br>";
        echo "Valores multiplos ";
        $mult = 0;
        for ($c=1; $c<=$n; $c++) {
          if ($n % $c == 0) {
            echo "$c ";
            $mult += 1;
          }
        }
        echo "<br>Total do multiplos: $mult";
        echo "<br>Resultado $n";
        if ($n < 2 || $mult > 2) {
            echo " <span class ='foco'>NAO E PRIMO!</span>";
        } else {
          echo " <span class ='foco'>E PRIMO!</span>";
        }
    ?>
    <br><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 