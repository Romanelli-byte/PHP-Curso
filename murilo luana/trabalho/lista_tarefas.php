<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>To-do List – lista das Tarefas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
    <?php
        include "inc/funcoes.inc";
        include "inc/cabecalho.inc";
        include "inc/menu.inc";

        if (empty($_POST)){
            $_SESSION["cadastrou"] = false;
            include "inc/form/form_busca_tarefa.inc";
            lista_tarefa();
        }
        else
        {
            if ($_SESSION["cadastrou"] == false){
                busca_tarefa();
                $_SESSION["cadastrou"] = true;
            }
            else{
                echo "<h1>tarefa já foi cadastrado</h1>";
            }
        }

    ?>    
    <?php
        include "inc/rodape.inc";
    ?>
</body>
</html> 