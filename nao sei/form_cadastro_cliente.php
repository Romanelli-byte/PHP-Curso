<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <title>Supermercado PHP - Cadastro de Clientes</title>
        <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
        
    </head>
    <body>
        <?php
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";

            if(empty($_POST)){
                include "form_cliente.inc";
            }
            else{
                cadastrar_cliente();
            }

            include "rodape.inc";
        ?>
        
    </body>
</html>