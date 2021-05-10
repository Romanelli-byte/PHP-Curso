<!DOCTYPE html>
<html lang = ”pt-BR” >
	<head>
		<title >Execicio 1</title >
	</head >
	<body>
			<?php
				$fun = 1500,00;
				$comissão = 0.04;
				$venda = 10000.00;
				
				$final = $comissão * $venda;
				$soma = $final + $fun;
				
				echo "O salário final do funcionário será $soma e sua comissão será $final";
			?>
	</body>
</html>