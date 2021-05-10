<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title>Exercicio 1</title>
        <?php
            //receber dados do 
        
            $corfundo  = $_POST["corfundo"];
            $tamfonte  = $_POST["tamfonte"];
            $corfonte  = $_POST["corfonte"];
            $alinhatxt = $_POST["alinhatexto"];
            $alinhah1  = $_POST["alinhah1"];
            $corh1     = $_POST["corh1"];

            // abrir o arquivo para escrita
            $arqcss = fopen("estilos.css", "w");

            $css  = "body{background-color: $corfundo;}\n";
            $css .= "p{font-size: $tamfonte;\ncolor: $corfonte; \ntext-align: $alinhatxt;}\n";
            $css .= "h1{text-align: $alinhah1;\n color: $corh1;}\n";

            fwrite($arqcss, $css);
            fclose($arqcss);
        ?>
        <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
    </head>
    <body>
        <h1>Seja Bem-vindo!</h1>
        <p>Este site permite definir o estilo dos elementos HTML.</p>
        <p>Para mudae o estilo, clique <a href="index.html">aqui</a></p>
    </body>
</html>