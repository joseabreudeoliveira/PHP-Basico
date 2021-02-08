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
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a.";
        echo "<br/>Você tem $i ano(s).";
        if ($i < 16){
            $tipoVoto = "não vota";
        }
        elseif (($i >= 16 && $i < 18) || ($i > 65)) { /*&&= e || = ou*/
                $tipoVoto = "voto opcional";
            }
            else{
                $tipoVoto = "voto obrigatorio";
            }
            
        echo "<br/>Para essa idade $tipoVoto.";
    ?>
    <a href="exercicio02.html"><h2>Voltar</h2></a>
</div>
</body>
</html>
 