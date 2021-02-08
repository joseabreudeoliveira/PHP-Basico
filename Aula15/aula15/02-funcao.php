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
        include "funcoes.php";  //include deixa o programa seguir se o arquivo não existir.
                                //require não deixa o programa seguir se o arquivo não existir.
                                //include_once e require_once não deixa incluir mais de uma vez se já tiver sido incluido
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(5);
        echo "<h3>Fim de programa.</h3>";
    ?>
</div>
</body>
</html>
 