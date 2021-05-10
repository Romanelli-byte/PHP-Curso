<?php  session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercicio 2 </title>
	</head>
	<body>
		<?php
			include "menu.inc";
			include "funcoes.inc";

				if(empty($_POST))
				{
					$_SESSION["cadastrou"] = false;
					include "form_livros.inc";
				}
				else
				{
					if ($_SESSION["cadastrou"] == false)
					{
						cadastra_livros();
						$_SESSION["cadastrou"] = true;
						echo "Livro cadastrado com sucesso.";
					}
					else
					{
						echo "Livro já foi cadastrado.";
					}
				}
		?> 
	</body>
</html>