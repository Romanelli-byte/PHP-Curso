<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro de Leitores</title>
</head>
<body>
<form action="form_cadastro_leitores.php" method="POST">
        <p> <a href="form_cadastro_leitores.php">Cadastrar jogador  | </a> 
			<a href="form_cadastro_livros.php">Listar jogadores     | </a> 
			<a href="form_emprestimo.php">Escalar jogadores         | </a> 
			<a href="lista_leitores.php">Listar escalados           | </a>
			<a href="lista_livros.php">Listar escalados               </a>
		</p>
		
		<h2>Cadastro de Leitores</h2>
	<fieldset>
       <?php 
           if (empty($_POST))
        {
            echo "
            <p>Nome: <input type=\"text\" size=\"30\" name=\"nome\"/></p>
            <p>Data: <input type=\"date\"  name=\"data\"/></p>
			<p>Prontuário: <input type=\"text\" size=\"30\" name=\"prontuario\"/></p>
			<p>Email: <input type=\"email\" name=\"email\" size=\"30\"/></p>
			
            <input type=\"submit\" value=\"Cadastrar Leitor\"/>";
        }
        else 
		{
            $_SESSION["nomes"][]= $_POST["nome"];
            $_SESSION["data"][]= $_POST["data"];
            $_SESSION["prontuario"][]= $_POST["prontuario"];
			$_SESSION["email"][]= $_POST["email"];
     
            echo "<h2>Jogador  $_POST[nome] cadastrado com sucesso.</h2>";
        }
		   
        ?>
    </fieldset>
</body>
</html>