<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 5</title>
	</head>
	<body>
		<?php
			$valor = $_POST["valor"];
			$altura = $_POST["altura"];
			
			$total = $valor * $altura;
			
			echo "<form><fieldset><legend>Altura</legend>Serão $total degraus a serem subidos para que atinja seu objetivo</fieldset></form>";
		?>
	</body>
</html>