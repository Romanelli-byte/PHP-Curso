<?php session_start(); ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="form_cadastro_usuarios.php" method="POST">
    <fieldset>
        <legend>Cadastro de Usuários</legend>
        <p><a href="form_cadastro_usuarios.php">Cadastro de usuários |</a> 
        <a href="form_cadastro_corridas.php">Cadastro de corridas |</a> 
        <a href="lista_usuarios.php">Lista de usuários |</a> 
        <a href="lista_corridas.php">Lista de corridas</a> </p>
        <?php 
        if (empty($_POST))
        {
            echo "
            <p>Nome: <input type=\"text\" size=\"30\" name=\"nome\"/></p>
            <p>Data: <input type=\"date\"  name=\"data\"/></p>
            <p>Sexo:
                <input type=\"radio\" name=\"sexo\" value=\"m\"/>Masculino
                <input type=\"radio\" name=\"sexo\" value=\"f\"/>Feminino</p>

            <p>Telefone: <input type=\"number\" name=\"telefone\"/></p>
            <p>Email: <input type=\"text\" size=\"30\" name=\"email\"/></p>

            <input type=\"submit\" value=\"enviar\"/>";
        }
        else {
            $_SESSION["nomes"][]= $_POST["nome"];
            $_SESSION["datas"][]= $_POST["data"];
            $_SESSION["sexos"][]= $_POST["sexo"];
            $_SESSION["telefones"][]= $_POST["telefone"];
            $_SESSION["emails"][]= $_POST["email"];
            echo "<h2>Usuário cadastrado com sucesso.</h2>

            <a href=\"index.php\">Voltar</a>";
        }
        ?>
    </fieldset>
    </form>
</body>
</html>