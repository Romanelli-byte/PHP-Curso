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
		if(!empty($_SESSION["emprestimo"]))
		{
			echo "<div class=\"center\">
					<table class=\"tabela1\" width=\"30%\" border=\"1\">
						<thead>
							<tr>
								<th> Leitor </th>
								<th> Livro </th>
								<th>Data de Empréstimo</th>
								<th> Devolução </th>
							</tr>
						</thead>
						<tbody>";
					
			for ($i = 0; $i < sizeof($_SESSION["emprestimo"]); $i++)
			{
				$leitor = $_SESSION["nome"][$i];
				$nlivro = $_SESSION["nlivro"][$i];
				$dataemp = $_SESSION["emprestimo"][$i];
				$dev = $_SESSION["devolucao"][$i];
				
				echo "<tr>
							<td>$leitor</td>
							<td>$nlivro</td>
							<td>$dataemp</td>
							<td>$dev</td>
							
					</tr>";
			}		
			echo " </tboby>
					</table>
					</div>";
		}
		else
		{
			echo "<p>Ainda não há emprestimos cadastrados.</p>";
		}
		echo "</fieldset>";
	?>
</body>
</html>