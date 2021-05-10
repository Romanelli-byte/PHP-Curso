<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
<?php
		if(!empty($_SESSION["nomes"]))
		{
			echo "<fieldset>";
			echo "	<p><a href=\"form_cadastro_pessoa.php\">Cadastrar Pessoas | </a>
					<a href=\"lista_pessoas.php\">Listar Pessoas | </a>
					<a href=\"form_consulta_pessoa.php\">Consultar Pessoa</a></p>";
			echo "<div class=\"center\">
					<table class=\"tabela1\" width=\"30%\" border=\"1\">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Telefone</th>
								<th>Endereço</th>
							</tr>
						</thead>
						<tbody>";
					
			for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
			{
				$nome = $_SESSION["nomes"][$i];
				$tel = $_SESSION["telefones"][$i];
				$end = $_SESSION["enderecos"][$i];
				echo "<tr>
							<td>$nome</td>
							<td>$tel</td>
							<td>$end</td>
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
		echo "</fieldset>";
	?>
</body>
</html>