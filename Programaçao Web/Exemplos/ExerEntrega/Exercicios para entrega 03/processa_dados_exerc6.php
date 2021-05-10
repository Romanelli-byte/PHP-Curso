<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 6</title>
	</head>
	<body>
		<?php
			$altura = $_POST["altura"];
			$largura = $_POST["largura"];
			$w = 18;
			
			$area = $altura * $largura;
			$metros_quad = $area / 2;
			
			$potencia = $metros_quad * $w;
			
			echo "<form><fieldset><legend>Dimensoes</legend>A área do comodo será de: $metros_quad M².<br/>E a potencia a ser utilizada neste comodo será de: $potencia W.</fieldset></form>";
		?>
	</body>
</html>