<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 3</title>
	</head>
	<body>
		<?php
			$valor = $_POST["valor"];
			$total = $valor / 5;
			
			echo "<form><fieldset><legend>Valor da Compra</legend>O valor de cada prestação (cinco) será de: $total reais</fieldset></form>";
		?>
	</body>
</html>