<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>World Game - Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
    <?php
        include "inc/funcoes.inc";
        include "inc/cabecalho.inc";
        include "inc/menu.inc";

        if (empty($_POST)){
            $_SESSION["cadastrou"] = false;
            include "inc/form/form_cadastro.inc";
        }
        else
        {
            if ($_SESSION["cadastrou"] == false){
                cadastra_clientes();
                $_SESSION["cadastrou"] = true;
            }
            else{
                echo "<h1>cliente já foi cadastrado</h1>";
            }
        }

    ?>    
    <?php
        include "inc/rodape.inc";
    ?>
</body>
</html>