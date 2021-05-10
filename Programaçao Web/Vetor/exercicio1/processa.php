<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Exercício 1 - Arrays</title>
</head>
<body>
	<?php
		$valores = $_POST["valor"];
		
		$tamanho = sizeof($valores);
		
		$maior = 0;
		$menor= 0;
		
		for($i=0; $i<$tamanho; $i++)
		{
			if ($i==0)
			{
				$maior = $menor = $valores[$i];
			}
			if ($valores[$i] > $maior)
			{
				$maior = $valores[$i];
			}
			if ($valores[$i] < $menor)
			{
				$menor = $valores[$i];
			}
		}
		echo "O maior valor no vetor é $maior.<br/>";
		echo "O menor valor no vetor é $menor.";
	?>
</body>
</html>