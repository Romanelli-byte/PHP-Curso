<!DOCTYPE html>
<meta charset="UTF-8">
<html lang=”pt-BR”>
  <head>
    <title>Exercício 1</title> 
  </head>
<body>
  <?php
  
	$custo_espetaculo = 2665.0;
	$preco_convite    = 65.0;
	
	$qtd_convites = $custo_espetaculo / $preco_convite;
	$qtd_convites = ceil($qtd_convites);
	// nao se pode vender meio convite, entao arredondamos para cima com a funcao ceil()
	
	echo "Devem ser vendidos $qtd_convites convites para cobrir o custo do espetáculo. <br>";
	
	$lucro        = 0.23 * $custo_espetaculo;
	$novo_custo   = $custo_espetaculo + $lucro;
	$qtd_convites = $novo_custo / $preco_convite;
	$qtd_convites = ceil($qtd_convites);
			
	echo "Para um lucro de 23%, devem ser vendidos $qtd_convites convites.";
			
  ?>
</body>
</html>