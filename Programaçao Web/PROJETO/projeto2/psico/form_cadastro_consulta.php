<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> IFSP-Car - Cadastro de Clientes </title>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<div>
		<?php
			include "funcoes.inc";
			include "cabecalho.inc";
			include"menu.inc";
			
			if(empty($_POST))
			{
				include "form_consulta.inc";
			}
			else 
			{
				ler_dados_consulta();
			}
		?>
	</div>
</body>
<html>