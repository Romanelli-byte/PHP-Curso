<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Supermercado PHP</title>
	<link rel="stylesheet" type="text/css" href="estilos.css"/>
</head>
<body>
	<?php
		include "funcoes.inc";
		include "cabecalho.inc";
		include "menu.inc";
		
		if(empty($_POST))
		{
			//apresentar formulário
			include "form_produto.inc";
		}
		else
		{
			//apresentar as informações do produto
			cadastra_produto();
		}
		
		include "rodape.inc";
	?>
</body>
<html>