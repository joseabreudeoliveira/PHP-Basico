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
        $codigo = "17756";
        $pos = str_pad($codigo,11,"0",STR_PAD_LEFT);
        echo "STR_PAD_LEFT é $pos <br/>" ;

        //$pos = str_pad($codigo,11,"0",STR_PAD_CENTER);
        //echo "STR_PAD_CENTER é $pos <br/>" ;

        $pos = str_pad($codigo,11,"0",STR_PAD_RIGHT);
        echo "STR_PAD_RIGHT é $pos <br/>" ;
    ?>
</div>
</body>
</html>
 