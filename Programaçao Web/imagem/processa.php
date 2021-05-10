<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Fotinha </title>
</head>
<body>
	<?php
		//nome temporario do arquivo no servidor
		$nome_tmp = $_FILES["arq"]["tmp_name"];
		
		//nome real do arquivo enviado pelo usuario
		$nome_real = $_FILES["arq"]["name"];
		
		copy($nome_tmp, "imagens/$nome_real");
		
		echo "<img src=\"imagens/$nome_real\">";

	?>
</body>
<html>