<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Maior e Menor </title>
</head>
<body>

	<?php 
	if (empty($_POST)){ 
		echo "<form action=\"index.php\" method=\"POST\">";
		
			for ($i = 0; $i < 10; $i++)
			{
				echo "<p>";
				echo "Número $i: <input type=\"number\" name=\"n$i\"/>";
				echo "</p>";
			}
			
		echo "<input type=\"submit\" value=\"Enviar\"/>";
		echo "</form>";
	}
	else
	{
		for($i = 0; $i < 10; $i++)
		{
			$numero = $_POST["n$i"];
			
			if ($i == 0 )
			{
				$maior = $menor =$numero;
				//$maior = $numero;
				//menor = $numero;
			}
			
			if ($numero > $maior)
			{ 
				$maior = $numero;
		    }
			
			if ($numero < $menor)
			{ 
				$menor = $numero;
			}
		} 
		
		echo "O maior número é $maior e o menor é $menor.";
	}
	?>
	
	

</body>
<html>