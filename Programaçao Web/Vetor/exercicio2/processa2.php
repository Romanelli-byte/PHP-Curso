<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Exercicio 2</title>
</head>
<body>
	<?php
		$r = $_POST["valor_r"];
		$s = $_POST["valor_s"];
		
		$x = array();
		
		for ($i = 0; $i <3 ; $i++)   //for ($i = 0; $i < sizeof($r); $i++)
		{
			$x[] = $r[$i];
		}
		for ($i = 0; $i <7 ; $i++)
		{
			$x[] = $s[$i];
		}
		for ($i = 0; $i <10 ; $i++)
		{
			echo $x[$i]."<br/>";
		}
	?>
</body>
</html>