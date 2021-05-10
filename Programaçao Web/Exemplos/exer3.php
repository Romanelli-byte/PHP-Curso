<!DOCTYPE html>
<html lang = ”pt-BR” >
	<head>
		<title >exercicio 3</title >
	</head >
	<body>
			<?php
				$ano_atual = 2017
				$ano_nasc = 1999
				
				$id_anos = $ano_atual - $ano_nasc;
				$id_meses = $id_anos * 12;
				$id_dias = $id_anos *365;
				$id_semanas = (int) ($dias/7);
			?>
	</body>
</html>