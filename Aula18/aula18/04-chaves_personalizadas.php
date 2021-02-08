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
                $v = array( 3 => 5,
                            1 => 9,
                            0 => 8,
                            7 => 7);
                print_r($v);     

                /*Insere mais uma posição*/
                echo "<br/>"; 
                $v[] = 10;
                print_r($v);     

                /*Remove uma posição*/
                echo "<br/>"; 
                unset($v[0]);
                print_r($v);     
            ?>
        </table>
    </pre>
</div>
</body>
</html>
 