<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro de Psicólogos</title>
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
				include "form_psico.inc";
			}
			else 
			{
				ler_dados_psico();
			}
		?>
	</div>
</body>
<html>