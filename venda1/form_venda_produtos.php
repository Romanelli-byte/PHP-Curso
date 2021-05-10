<?php session_start(); ?>
<!DOCTYPE<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Supermercado php - cadastro de venda </title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    
</head>
<body>
    
        <?php
        
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";
            
            if (empty($_POST))
            {
                include "form_venda.inc";
            }
            else
            {
                cadastra_venda();
            }

            include "rodape.inc";
           
        ?>
    </div>

</body>
</html>