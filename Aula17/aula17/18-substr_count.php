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
        $nome = "jose abreu de oliveira";
        $pos = substr_count($nome,"e");
        echo "A string foi encontrada $pos vezes." ;
    ?>
</div>
</body>
</html>
 