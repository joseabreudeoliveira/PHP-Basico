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
        $txt = "Jose Abreu de Oliveira";
        $count = str_word_count($txt,0); //Ultimo parametro 0(zero) a função conta
        echo "O nome $txt tem $count palavras.<br/>";
        $count = str_word_count($txt,1);  //Ultimo parametro 1(um) a função cria um array com as palavras
        print_r($count);
        echo  "<br/>";
        $count = str_word_count($txt,2);  //Ultimo parametro 2(um) a função cria um array com as palavras
        print_r($count);                 //no id do vetor igual a posição da palavra na string
    ?>
</div>
</body>
</html>
 