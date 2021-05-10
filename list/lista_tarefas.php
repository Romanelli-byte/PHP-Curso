<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Lista</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
<?php
       
        include "inc/funcoes.inc";
        include "inc/cabecalho.inc";
        include "inc/menu.inc";

        echo "<fieldset>";
        if (empty($_POST)){
            $_SESSION["cadastrou"] = false;
            include "inc/form/form_busca_tarefa.inc";
            lista_tarefa();
        }
        else
        {
            if ($_SESSION["cadastrou"] == false){
                buscaDeTarefa();
                $_SESSION["cadastrou"] = true;
            }
            else{
                echo "<h1>Tarefa já foi cadastrada!</h1>";
            }
        }
        echo "</fieldset>";
    ?>    
    <?php
        include "inc/rodape.inc";
    ?>
</body>
</html>
