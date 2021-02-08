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
        $pos = substr($nome,0,4);
        echo "A substring e $pos. <br/>" ;
        
        $nome = "jose abreu de oliveira";
        $pos = substr($nome,5);
        echo "A substring e $pos. <br/>" ;
        
        $nome = "jose abreu de oliveira";
        $pos = substr($nome,-8);
        echo "A substring e $pos. <br/>" ;
        
        $nome = "jose abreu de oliveira";
        $pos = substr($nome,-8,5);
        echo "A substring e $pos. <br/>" ;
    ?>
</div>
</body>
</html>
 