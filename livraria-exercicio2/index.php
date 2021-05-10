<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercicio 2 </title>
	</head>
	<body>
		<p>
			<a href="index.php">Cadastro de livros</a>
			<a href="dados.php">Dados dos livros</a>
		</p>
	
		<?php
			include "funcoes.inc";

				if(empty($_POST))
				{
					include "form_cadastra_livro.inc";
				}
				else
				{
					form_livros();
				}
		?> 
	</body>
</html>