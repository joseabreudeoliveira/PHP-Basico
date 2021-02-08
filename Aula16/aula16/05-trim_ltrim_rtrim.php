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
        /*ltrim tira espaços a esquerda
          rtrim tira espaços a direita
          trim tira espaços a esquerda e a direita*/
        $txt = "   Jose Abreu de Oliveira   ";
        $tamanho = strlen($txt);
        echo "O nome $txt tem $tamanho caracteres.<br/>";

        $txt = trim($txt);
        $tamanho = strlen($txt);
        echo "O nome $txt tem $tamanho caracteres apos o tratamento com TRIM.";
    ?>
</div>
</body>
</html>
 