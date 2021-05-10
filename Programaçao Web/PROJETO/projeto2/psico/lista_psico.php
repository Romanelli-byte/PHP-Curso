<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Supermercado PHP - Lista de vendas</title>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<div>
		<?php
			include "funcoes.inc";
			include "cabecalho.inc";
			include "menu.inc";
				
				listar_vendas();
				
			include "rodape.inc";
		?>
	</div>
</body>
<html>