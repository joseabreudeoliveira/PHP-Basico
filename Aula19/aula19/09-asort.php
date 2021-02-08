<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("A","J","M","X","K");
        print_r($v);

        asort($v); //ordena crescentemente levando o indice dos elementos no vetor
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 