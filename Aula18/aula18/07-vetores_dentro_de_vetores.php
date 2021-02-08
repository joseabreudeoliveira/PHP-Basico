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
            $m = array( array(6,4),
                        array(1,3),
                        array(9,8),
                        array(0,7));
                          
            $m [3] [0] = $m [3] [1];

            print_r($m);
        ?>
    </pre>
</div>
</body>
</html>
 