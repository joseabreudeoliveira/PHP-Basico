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
        $vetor = explode(" ",$txt); //Explode sempre que o caracter informado for encontrado
        print_r($vetor);
    ?>
</div>
</body>
</html>
 