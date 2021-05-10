<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<title>Supermecado PHP - Lista de Produtos</title>
		<link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
	</head>
	<body>
		<div>
        <?php
            include "funcoes.inc";
			include "cabecalho.inc";
			include "menu.inc";

			listar_produtos();

			include "rodape.inc";
		?>
		</div>
	</body>
</html>