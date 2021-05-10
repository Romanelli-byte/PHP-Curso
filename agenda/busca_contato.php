<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Agenda - Cadastro!</title>
        <link rel="stylesheet" type="text/css" href="estilos.css"/>
    </head>
    <body>
        <?php
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";

            if (empty($_POST))
            {
                // exibir o formulario
                include "form_busca.inc";
            }
            else
             {
                 // fazer a busca
                busca_contato();
             }
        ?>

       
        <?php
            include "rodape.inc";
        ?>
    </body>
</html>