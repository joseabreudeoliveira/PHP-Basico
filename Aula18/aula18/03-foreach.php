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
        <table border="1"><tr>
            <?php
                $c = range(2,20,2); //Cria o array iniciando em 2 ate 20 de 2 em 2
                foreach($c as $v){
                    echo "<td>$v ";
                }      
            ?>
        </table>
    </pre>
</div>
</body>
</html>
 