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
        function soma($a,$b) {
          $s = $a + $b;
         return $s;
        }
        $x=11;
        $y=22;
        $r = soma($x,$y);
        echo "A soma entre $x e $y é $r."
    ?>
</div>
</body>
</html>
 