<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Agenda - Lista!</title>
        <link rel="stylesheet" type="text/css" href="estilos.css"/>
    </head>
    <body>
        <?php
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";

          lista_contatos();
        ?>

       
        <?php
            include "rodape.inc";
        ?>
    </body>
</html>