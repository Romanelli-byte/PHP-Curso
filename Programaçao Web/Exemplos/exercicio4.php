<!DOCTYPE html>
<meta charset="UTF-8">
<html lang=”pt-BR”>
  <head>
    <title>Exercício 4</title> 
  </head>
<body>
  <?php
		
		$valor_diaria = 167.0;
		
		$valor_promocional = $valor_diaria - ($valor_diaria * 0.25);
		
		echo "O valor promocional da diária é R\$$valor_promocional.<br>";
		
		$valor_arrecadado = 2 * $valor_promocional * 42;
		
		echo "O valor arrecadado com a ocupação em 100% é R\$$valor_arrecadado.<br>";
		
		$valor_arrecadado = 2 * $valor_promocional * (42 * 0.7);
		
		echo "O valor arrecadado com a ocupação em 70% é R\$$valor_arrecadado.<br>";
		
		$valor_cheio = 2 * $valor_diaria * 42;
		$valor_desct = 2 * $valor_promocional * 42;
		
		$perda = $valor_cheio - $valor_desct;
		
		echo "O hotel deixara de arrecadar R\$$perda com a promoção.";
			
  ?>
</body>
</html>