<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Lista Usuarios</title>
</head>
<body>
<fieldset>
        <legend>Lista de Usuários</legend>
        <p><a href="form_cadastro_usuarios.php">Cadastro de usuários |</a> 
        <a href="form_cadastro_corridas.php">Cadastro de corridas |</a> 
        <a href="lista_usuarios.php">Lista de usuários |</a> 
        <a href="lista_corridas.php">Lista de corridas</a> </p>
        <?php 
            $nome = $_SESSION["nomes"];
            $data = $_SESSION["datas"];
            $sexo = $_SESSION["sexos"];
            $telefone = $_SESSION["telefones"];
            $email = $_SESSION["emails"];

            echo "<table border=\"1\">
                <th>Nome</th>
                <th>Data</th>
                <th>Sexo</th>
                <th>Telefone</th>
                <th>Email</th>";

                for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
                {
                    echo "<tr>
                            <td>$nome[$i]</td>
                            <td>$data[$i]</td>
                            <td>$sexo[$i]</td>
                            <td>$telefone[$i]</td>
                            <td>$email[$i]</td>
                        </tr>";
                }

            echo "</table>";

            
        ?>
 </fieldset>
</body>
</html>