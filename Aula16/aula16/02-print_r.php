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
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v);
        
        echo "<br/>";
        $v2 = array (2,4,6,8,10);
        print_r($v2);
        
        echo "<br/>";
        echo "Com var_dump <br/>";
        var_dump($v);

        echo "<br/>";
        echo "Com var_export <br/>";
        var_export($v);
    ?>
</div>
</body>
</html>
 