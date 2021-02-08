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
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "não informado";
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "não informado";
        $md = ( ($n1+$n2) / 2);

        echo "A media entre " . number_format($n1,2) . " e " . number_format($n2,2) . " é igual a " . number_format($md,2);

        if ($md < 5){
            $resultado = "REPROVADO";
        }
        elseif ($md >= 5 && $md < 7) { 
                $resultado = "RECUPERAÇÃO";
            }
            else{
                $resultado = "APROVADO";
            }
            
        echo "<br/>Situação do Aluno: $resultado.";
    ?>
    <a href="desafio.html"><h2>Voltar</h2></a>
</div>
</body>
</html>
 