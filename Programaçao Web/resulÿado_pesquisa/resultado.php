<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Resultado - Exercício 9 </title>
</head>
<body>
	<h2>Resultados da pesquisa</h2>	
	<?php
		$npessoas = $_POST["npessoas"];
		
		$soma_idade_otimo = 0;
		$cont_idade_otimo = 0;
		$cont_regular = 0;
		$cont_bom = 0;
		
		for($i = 1; $i <= $npessoas; $i++)
		{
			$idade = $_POST["idade$i"];
			$opiniao = $_POST["opiniao$i"];
			
			if ($opiniao == 3) //Otimo
			{
				$soma_idade_otimo += $idade;
				$cont_idade_otimo++;
			}
			elseif ($opiniao == 2) //Bom
			{
				$cont_bom++;
			}
			else //Regular
			{
				$cont_regular++;
			}
		}
		
		if ($cont_idade_otimo == 0)
		{
			$media_idade_otimo = 0;
		}
		else
		{
			$media_idade_otimo = $soma_idade_otimo / $cont_idade_otimo;
		}
		
		$porc_bom = ($cont_bom / $npessoas)*100;
		$porc_bom = number_format($porc_bom, 1);
		
		echo "A média de idade de quem respondeu ótimo é : $media_idade_otimo.<br/>";
		echo "A quantidade  de pessoas que respondeu regular é $cont_regular.<br/>";
		echo "A porcentagem de pessoas que respondeu bom é $porc_bom%.";	
	?>
</body>
<html>