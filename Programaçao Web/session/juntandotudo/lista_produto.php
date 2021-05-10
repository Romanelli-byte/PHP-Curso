<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Lista de produtos</title>
	<style>
		.center{
			margin:auto;
		}
		.tabela1 tbody tr:nth-child(odd){
			background-color: #E9E9E9;
		}
	</style>
</head>
<body>
	<?php
		if(!empty($_SESSION["nomes"]))
		{
			echo "<div class=\"center\">
					<table class=\"tabela1\" width=\"30%\" border=\"1\">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Preco</th>
							</tr>
						</thead>
						<tbody>";
					
			for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++) // recupera dados de uma sessão
			{
				$nome = $_SESSION["nomes"][$i];
				$preco = $_SESSION["precos"][$i];
				
				echo "<tr>
						<td>$nome</td>
						<td>$preco</td>
					</tr>";
			}
						
			echo " </tboby>
					</table>,
					</div>";
		}
		else
		{
			echo "<p>Nenhum produto cadastrado.</p>";
		}
		
			echo "<a href=\"index.php\"> Cadastrar produto</a>";
	?>
</body>
</html>
