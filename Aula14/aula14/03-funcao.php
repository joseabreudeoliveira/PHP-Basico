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
        function soma() {
            $p = func_get_args();  //pega os argumentos passados como parametros e guarda no vetor $p
            $t = func_num_args();  //retorna o numero de parametros passado na chamada da função
            $s = 0;
            for ( $i = 0; $i < $t; $i++ ) {
                $s += $p{$i};
            }
            return $s;
        }
        $r = soma(1,2,3,4,5,6,7,8,9,10);
        echo "A soma entre os valores é $r.";
    ?>
</div>
</body>
</html>
 