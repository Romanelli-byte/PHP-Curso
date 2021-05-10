<!DOCTYPE html>
<html lang = "pt-BR">
	<head>
		<title> Data atual </title>
	</head>
	<body>
		<?php
			$data_de_hoje=date ("d/m/Y" , time ());
		?>
		<p align = "center" >
			Hoje é dia <?php echo $data_de_hoje;?>
		<p>
	</body>
</html>