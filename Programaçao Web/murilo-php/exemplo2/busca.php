<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>Busca na agenda</title>
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
				include "form_busca.inc";
			}
			else 
			{
				busca_agenda();
			}
		?>
</body>
</html>