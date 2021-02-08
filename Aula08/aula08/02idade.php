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
        /*
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano; //Y retorna YYYY e y retorna yy
        echo "$nome é $sexo e tem $idade anos.";
        */
        /*usando unario (solução palhativa pois o correto será na proxima aula com if)
         para não dar erro se a pagina php for 
        chamada antes de html
        isset verifica se foi configurado*/
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[nome não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano; //Y retorna YYYY e y retorna yy
        echo "$nome é $sexo e tem $idade anos.";
    ?>
    <a href="02exercicio.html"><h2>Voltar</h2></a>
</div>
</body>
</html>
 