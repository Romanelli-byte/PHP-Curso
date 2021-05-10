<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro de Corridas</title>
</head>
<body>
    <form action="form_cadastro_corridas.php" method="POST">
    <fieldset>
        <legend>Cadastro de Corridas</legend>
        <p><a href="form_cadastro_usuarios.php">Cadastro de usuários |</a> 
        <a href="form_cadastro_corridas.php">Cadastro de corridas |</a> 
        <a href="lista_usuarios.php">Lista de usuários |</a> 
        <a href="lista_corridas.php">Lista de corridas</a> </p>


        <?php 
            if (empty($_POST))
            {
                
                echo "<p>Corredor: <select name=\"corredor\">";
                for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
                {
                    $nome = $_SESSION["nomes"][$i];
                    echo "<option value=\"$nome\">$nome</option>";
                }
                echo "</select></p>";

                echo "<p>Quantidade de kilometros corridos: <input type=\"number\" name=\"km\"/></p>
            <p>Duração (em minutos): <input type=\"number\" name=\"duracao\"/></p>
            <p>Data: <input type=\"date\"  name=\"data\"/></p>";

            echo "<input type=\"submit\" value=\"Enviar\"/>";
        }

        else{
            $_SESSION["corredor"][] = $_POST["corredor"];
            $_SESSION["km"][] = $_POST["km"];
            $_SESSION["duracao"][] = $_POST["duracao"];
            $_SESSION["data"][] = $_POST["data"];

            echo "<h2>Corrida cadastrada com sucesso.</h2>

            <a href=\"index.php\">Voltar</a>";
        }
        ?>
     </fieldset>   
    </form>
</body>
</html>