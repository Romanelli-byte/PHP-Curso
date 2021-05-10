<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Agenda - Lista</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
    <?php
        include "inc/funcoes.inc";
        include "inc/cabecalho.inc";
        include "inc/menu.inc";

        lista_clientes();

    ?>    
    <?php
        include "inc/rodape.inc";
    ?>
</body>
</html>
