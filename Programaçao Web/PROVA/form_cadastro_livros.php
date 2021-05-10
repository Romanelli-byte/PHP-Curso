<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro de Livro </title>
</head>
<body>
<form action="form_cadastro_livros.php" method="POST">
        <p> <a href="form_cadastro_leitores.php"> Cadastro de Leitores | </a> 
			<a href="form_cadastro_livros.php"> Cadastro  de  Livros   | </a> 
			<a href="form_emprestimo.php"> Empréstimo de Livros        | </a> 
			<a href="lista_leitores.php"> Listagem de Leitores         | </a>
			<a href="lista_livros.php"> Listagen de Livros             | </a> 
			<a href="lista_emprestimos.php"> Listagem de Empréstimos     </a>
		</p>
	<fieldset>
	<legend> Cadastrar Livro </legend>
       <?php 
			if (empty($_POST))
			{
				echo "
				<p>Nome do livro : <input type=\"text\" size=\"30\" name=\"nlivro\"/></p>
				<p>Ano de Publicação : <input type=\"date\"  name=\"ano\"/></p>
				<p>Autor : <input type=\"text\" name=\"autor\" size=\"30\"/></p>
				
				<input type=\"submit\" value=\"Cadastrar Livro\"/> ";
			}
			else 
			{
				$_SESSION["nlivro"][]= $_POST["nlivro"];
				$_SESSION["ano"][]= $_POST["ano"];
				$_SESSION["autor"][]= $_POST["autor"];
		 
				echo "<h2> Livro cadastrado com sucesso. </h2> ";
			}
        ?>
    </fieldset>
</body>
</html>