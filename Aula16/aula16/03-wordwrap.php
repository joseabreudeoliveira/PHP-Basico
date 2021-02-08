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
        $txt = "Nessa aula, veremos uma lista de funções para Strings usando PHP. São funções internas que já existem na linguagem. A lista de funções de manipulação de Strings que serão vistas nessa aula é composta pelas instruções";
        $r = wordwrap($txt,20,"<br/>\n", true);
        echo "$r";
    ?>
</div>
</body>
</html>
 