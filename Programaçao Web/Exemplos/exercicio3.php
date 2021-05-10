<!DOCTYPE html>
<meta charset="UTF-8">
<html lang=”pt-BR”>
  <head>
    <title>Exercício 3</title> 
  </head>
<body>
  <?php
		
		$custo_kw = 0.48;
		$consumo  = 137.0;
		
		$valor_pago = $custo_kw * $consumo;
		
		echo "A residência deve pagar R\$ $valor_pago em fevereiro.<br>";
		
		$valor_desconto = $valor_pago - (0.15 * $valor_pago);
		
		echo "Com 15% de desconto o valor é de R\$$valor_desconto.";
			
  ?>
</body>
</html>