<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Cadastro de Clientes </title>
</head>
<body>
	<div>
		<?php
			include "funcoes.inc";
			include "cabecalho.inc";
			include"menu.inc";
			
			if(empty($_POST))
			{
				include "form_cliente.inc";
			}
			else 
			{
				ler_dados_cliente();
			}
		?>
	</div>
</body>
<html>