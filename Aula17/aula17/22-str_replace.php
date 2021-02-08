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
        $pos = str_replace("de","ed",$nome);
        echo "str_replace de por ed : $pos <br/>" ;

        $pos = str_ireplace("DE","ed",$nome);
        echo "str_replace de por ed : $pos" ;
    ?>
</div>
</body>
</html>
 