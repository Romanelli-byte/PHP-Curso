<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Lista Usuarios</title>
</head>
<body>
<fieldset>
        <legend>Lista de Corridas</legend>
        <p><a href="form_cadastro_usuarios.php">Cadastro de usuários |</a> 
        <a href="form_cadastro_corridas.php">Cadastro de corridas |</a> 
        <a href="lista_usuarios.php">Lista de usuários |</a> 
        <a href="lista_corridas.php">Lista de corridas</a> </p>

    <form action="lista_corridas" method="POST">
        <?php 

            $corredor = $_SESSION["corredor"];
            $km = $_SESSION["km"];
            $duracao = $_SESSION["duracao"];
            $data = $_SESSION["data"];

            if (empty($_POST))
            {
                echo "<table border=\"1\">
                    <th>Corredor</th>
                    <th>Km percorridos</th>
                    <th>Duração</th>
                    <th>Data</th>";

                    for ($i = 0; $i < sizeof($_SESSION["corredor"]); $i++)
                    {
                        echo "<tr>
                                <td>$corredor[$i]</td>
                                <td>$km[$i]</td>
                                <td>$duracao[$i]</td>
                                <td>$data[$i]</td>
                            </tr>";
                    }

                echo "</table>";

                echo "<p>Corredor: <select name=\"pessoa\">";
                for ($i = 0; $i < sizeof($_SESSION["corredor"]); $i++)
                {
                    $nome = $_SESSION["corredor"][$i];
                    echo "<option value=\"$nome\">$nome</option>";
                }
                echo "</select></p>";

            echo "<input type=\"submit\" value=\"Pesquisar\"/>";

            }
            else{
                $pessoa = $_POST["pessoa"];
                echo "<table border=\"1\">
                    <th>Corredor</th>
                    <th>Km percorridos</th>
                    <th>Duração</th>
                    <th>Data</th>";
                for ($i = 0; $i < sizeof($_SESSION["corredor"]); $i++)
                {
                    if ($pessoa == $corredor[$i])
                    {
                        

                    echo "<tr>
                                <td>$corredor[$i]</td>
                                <td>$km[$i]</td>
                                <td>$duracao[$i]</td>
                                <td>$data[$i]</td>
                            </tr>";
                    }   
                }
                echo "</table><br>";
            }
        ?>
        </form>
    </fieldset>
</body>
</html>