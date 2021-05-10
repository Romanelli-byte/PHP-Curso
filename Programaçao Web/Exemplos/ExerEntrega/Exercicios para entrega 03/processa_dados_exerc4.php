<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 4</title>
	</head>
	<body>
		<?php
			$valor = $_POST["valor"];
			$lucro = $_POST["percentual"];
			
			$porc = $lucro / 100;
			
			$total = $valor + ($valor * $porc);
			
			echo "<form><fieldset><legend>Produto</legend>O valor da venda do produto será de: $total reais</fieldset></form>";
		?>
	</body>
</html>