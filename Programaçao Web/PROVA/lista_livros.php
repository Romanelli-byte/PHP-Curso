<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Listagem dos Livros</title>
</head>
<body>
        <p> <a href="form_cadastro_leitores.php"> Cadastro de Leitores | </a> 
			<a href="form_cadastro_livros.php"> Cadastro  de  Livros   | </a> 
			<a href="form_emprestimo.php"> Empréstimo de Livros        | </a> 
			<a href="lista_leitores.php"> Listagem de Leitores         | </a>
			<a href="lista_livros.php"> Listagen de Livros             | </a> 
			<a href="lista_emprestimos.php"> Listagem de Empréstimos     </a>
		</p>
	<fieldset>
<?php
		if(!empty($_SESSION["nlivro"]))
		{
			echo "<div class=\"center\">
					<table class=\"tabela1\" width=\"30%\" border=\"1\">
						<thead>
							<tr>
								<th>Nome do Livro </th>
								<th>Ano de Publicação </th>
								<th>Autor</th>
							</tr>
						</thead>
						<tbody>";
					
			for ($i = 0; $i < sizeof($_SESSION["nlivro"]); $i++)
			{
				$nlivro = $_SESSION["nlivro"][$i];
				$ano = $_SESSION["ano"][$i];
				$autor = $_SESSION["autor"][$i];
				
				echo "<tr>
							<td>$nlivro</td>
							<td>$ano</td>
							<td>$autor</td>
					</tr>";
			}		
			echo " </tboby>
					</table>
					</div>";
		}
		else
		{
			echo "<p>Ainda não há Livros cadastrados.</p>";
		}
		echo "</fieldset>";
	?>
</body>
</html>