<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Listagem de Leitores</title>
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
				if(!empty($_SESSION["nomes"]))
				{
					echo "<div class=\"center\">
							<table class=\"tabela1\" width=\"30%\" border=\"1\">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Data de Nascimento</th>
										<th>Prontuário</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>";
							
					for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
					{
						$nome = $_SESSION["nomes"][$i];
						$nasc = $_SESSION["data"][$i];
						$pront = $_SESSION["prontuario"][$i];
						$email = $_SESSION["email"][$i];
						
						echo "<tr>
									<td>$nome</td>
									<td>$nasc</td>
									<td>$pront</td>
									<td>$email</td>
							</tr>";
					}		
					echo " </tboby>
							</table>
							</div>";
				}
				else
				{
					echo "<p>Ainda não há pessoas cadastradas.</p>";
				}
			?>
	</fieldset>
</body>
</html>