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
        $vetor[0] = "Jose";
        $vetor[1] = "Abreu";
        $vetor[2] = "de";
        $vetor[3] = "Oliveira";
        $texto = implode("#",$vetor); //Conctena em uma string separado pelo caracter informado que neste caso é o #
        print_r($texto);       
        echo "<br/>";
        $texto1 = join("#",$vetor);  //Conctena em uma string separado pelo caracter informado que neste caso é o #
        print_r($texto1);
    ?>
</div>
</body>
</html>
 