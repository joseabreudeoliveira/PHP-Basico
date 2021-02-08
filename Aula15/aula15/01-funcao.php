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
        //Exemplo de passagem por VALOR onde a variavel $a não é alterada
        function teste($x) {
          $x += 2;
          echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";

        //Exemplo de passagem por REFERENCIA onde a variavel $a é alterada
        function teste1(&$x) {
          $x += 2;
          echo "<p>O valor de X é $x</p>";
        }

        $a = 5;
        teste1($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div>
</body>
</html>
 