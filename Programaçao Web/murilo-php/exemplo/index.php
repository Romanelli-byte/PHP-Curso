<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title> Agenda pessoal</title>
	</head>
	<body>
		<p>
			<a href="index.php">Cadastrar</a> | 
			<a href="lista.php">Listar</a> |
			<a href="busca.php">Buscar</a> 
		</p>
		<?php
			include "funcoes.inc";
			
			if(empty($_POST))
			{
				include "form_agenda.inc";
			}
			else 
			{
				cadastra_agenda();
			}
		?>
	</body>
<html>