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
            $cad = array( "nome" => "Jose Abreu de Oliveira",
                          "idade" => 55,
                          "peso" => 113.5,
                          "altura" => 1.89);
                          
            foreach($cad as $k => $c)  {
                echo "O campo $k possue o conteudo $c <br/>";
            }
        ?>
    </pre>
</div>
</body>
</html>
 