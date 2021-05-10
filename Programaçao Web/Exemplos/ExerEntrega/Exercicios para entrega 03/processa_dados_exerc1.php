<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 1</title>
	</head>
	<body>
		<?php
			$valor = $_POST["valor"];
			$valor = $valor - ($valor * (90/100.0));
			
			echo "<form><fieldset><legend>Desconto</legend>O valor com o desconto será de: $valor reais</fieldset></form>";
		?>
	</body>
</html>