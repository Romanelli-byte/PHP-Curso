<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Blog LuMe - Noticias</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilos.css" />
</head>
<body>
    <?php
        include "cabecalho.inc";
        include "menu.inc";
        include "funcoes.inc";

        noticia();
        
        include "rodape.inc";
    ?>
</body>
</html>