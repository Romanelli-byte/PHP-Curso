<?php session_start(); ?>
<!DOCTYPE<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Supermercado php - cadastro de vendas </title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
    
        <?php
        
            include "funcoes.inc";
            include "cabecalho.inc";
            include "menu.inc";
            echo"<center>";
           
             listar_vendas();
            

            include "rodape.inc";
            echo "</center>"
        ?>
    </div>

</body>
</html>