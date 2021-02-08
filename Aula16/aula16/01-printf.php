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
        $p = "Leite";
        $pr = "4.5";
        echo "Sem printf<br/>";
        echo "O $p custa R$ ". number_format($pr,2) . "<br/>";
        echo "Com printf<br/>";
        printf ("O %s custa R$ %.2f", $p, $pr) /*%s = string 
                                                 %.2f = float real com 2 casas decimais
                                                 %d valor decimal negativo ou positivo
                                                 %u valor decimal sem sinal só positivo
                                                 */

    ?>
</div>
</body>
</html>
 