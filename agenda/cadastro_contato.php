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
                $_SESSION["cadastrou"] = false;
                include "form_cadastro.inc";
            }
            else
            {
                if($_SESSION["cadastrou"] == false)
                {
                    cadastra_contato();
                    $_SESSION["cadastrou"] = true;
                }
                else
                {
                    echo "<h1>Contato ja foi cadastrado.</h1>";
                }
                
            }
        ?>

       
        <?php
            include "rodape.inc";
        ?>
    </body>
</html>