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
        $e = isset($_GET["estados"])?$_GET["estados"]:24;
        switch ($e) {
          case 1:
          case 2:
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
            echo "Voce mora na <span class='foco'>Regiao Norte</span>";
            break;
          case 8:
          case 9:
          case 10:
          case 11:
          case 12:
          case 13:
          case 14:
          case 15:
          case 16:
            echo "Voce mora na <span class='foco'>Regiao Nordeste</span>";
            break;
          case 17:
          case 18:
          case 19:
          case 20:
            echo "Voce mora na <span class='foco'>Regiao Centro-Oeste</span>";
            break; 
          case 21:
          case 22:
          case 23:
          case 24:
            echo "Voce mora na <span class='foco'>Regiao Sudeste</span>";
            break;      
          case 25:
          case 26:
          case 27:
            echo "Voce mora na <span class='foco'>Regiao Sul</span>";
            break;      
        }
    ?>
    <br>
    <a href="javascript: history.go(-1)">Voltar</a>
</div>
</body>
</html>
 