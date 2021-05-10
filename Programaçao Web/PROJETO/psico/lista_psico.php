<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<div>
		<?php
			include "funcoes.inc";
			include "cabecalho.inc";
			include "menu.inc";
				
				listar_psico();
				
			include "rodape.inc";
		?>
	</div>
</body>
<html>