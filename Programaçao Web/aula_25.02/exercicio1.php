 <DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>exercicio 1</title>
	</head>
	<body>
		 <?php
			$n1 = $_POST["n1"];
			$n2 = $_POST["n2"];
			$soma = 0;
			
			for($i = 1; $i <= $n1; $i++)
			{
				echo "$n2";
				$soma += $n2;
			}
			echo " = ".$soma;
		 ?>
	</body>
</html>