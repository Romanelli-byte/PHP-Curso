<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 2</title>
	</head>
	<body>
		<?php
			$valor = $_POST["valor"];
			$dolar = 3.77;
			
			$cotacao = $valor * $dolar;
			
			echo "<form><fieldset><legend>Cofre</legend>O valor depositado no cofre em reais é de $cotacao reais</fieldset></form>";
		?>
	</body>
</html>