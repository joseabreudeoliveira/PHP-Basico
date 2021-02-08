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
        $txt = "Jose Abreu de Oliveira";
        $vetor = str_split($txt); //Coloca cada caracter em uma posição(indice) do vetor
        print_r($vetor);
    ?>
</div>
</body>
</html>
 