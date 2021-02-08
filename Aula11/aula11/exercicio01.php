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
        $n=1;
        while( $n <= 10 ) {
          echo $n . "<br/>";
          $n++;
        }
        $n=10;
        while( $n >= 1 ) {
          echo $n . "<br/>";
          $n--;
        }
        $n=10;
        while( $n >= 1 ) {
          echo $n . "<br/>";
          $n-=2; //ou $n = $n - 2
        }
    ?>
</div>
</body>
</html>
 