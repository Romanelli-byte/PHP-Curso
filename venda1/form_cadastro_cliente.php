<?php session_start(); ?>
<!DOCTYPE<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Supermercado php - cadastro de cliente </title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    
</head>
<body>
    
        <?php
        
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";
            
            if (empty($_POST))
            {
                include "form_cliente.inc";
            }
            else
            {
                cadastra_cliente();
            }

            include "rodape.inc";
           
        ?>
    </div>

</body>
</html>