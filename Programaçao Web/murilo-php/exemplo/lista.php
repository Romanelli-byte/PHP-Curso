<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title> Listar agenda</title>
	</head>
	<body>
		<p>
			<a href="index.php">Cadastrar</a> | 
			<a href="lista.php">Listar</a> |
			<a href="busca.php">Buscar</a> 
		</p>
		<?php
			include "funcoes.inc";
            lista_agenda();
		?>
	</body>
<html>