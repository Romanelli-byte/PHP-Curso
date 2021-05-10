<!DOCTYPE html>
<meta charset="UTF-8">
<html lang=”pt-BR”>
  <head>
    <title>Exercício 2</title> 
  </head>
<body>
  <?php
		
		$tempo_gasto = 2.5;
		$vel_media   = 96.0;
		$consumo     = 12.0;
		
		$distancia_percorrida = $vel_media * $tempo_gasto;
		$combustivel_gasto = $distancia_percorrida / $consumo;
		
		echo "Foram gastos $combustivel_gasto litros de combustivel";
			
  ?>
</body>
</html>