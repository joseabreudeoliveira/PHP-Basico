<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
       <form method="get" action="exercicio02p2.php">
         <?php
         $n=1;
         while($n <=5){
         echo "valor $n: <input type='number' name='v$n' min='0' max='100' value='0'/> <br/>";
         $n++;
        }
         ?>
         <input type="submit" value="Enviar" class="botao"/>
</div>
</body>
</html>
 