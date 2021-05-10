<!DOCTYPE html>
<meta charset="UTF-8">
<html lang=”pt-BR”>
  <head>
    <title>Exercício 5</title> 
  </head>
<body>
  <?php
		
		$peso   = 67.0;
		$altura = 1.72; // em metros
		
		$indice = $peso/ ($altura * $altura);
		$indice = number_format($indice,2); // dois digitos depois do ponto
		
		echo "O índice de massa corpórea é $indice.";
			
  ?>
</body>
</html>