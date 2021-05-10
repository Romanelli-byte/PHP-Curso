<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Págin de Boas-vindas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
	<?php
		if (isset($_COOKIE["nome_usuario"]))
		{
			$nome_usuario = $_COOKIE["nome_usuario"];
		}
		
		if (isset($_COOKIE["senha"]))
		{
			$senha = $_COOKIE["senha"];
		}
		
		if(!(empty($nome_usuario)|| empty($senha)))
		{
			if(($nome_usuario != "admin" || $senha != "123"))
			{
				setcookie("nome_usuario");
				setcookie("senha");
				echo "Você não realizou o login!";
				echo "<a href=\"login.html\">Login</a>";
				exit;  // interrompe a execução do script
			}
		}
		else 
		{
			echo "Você não realizou o login";
			echo "<a href=\"login.html\">Login</a>";
			exit; // interrompe a execução do script
		}
		echo '<p> Seja bem-vindo (a)! </p>
		<p>	
		<a href="logout.php">Logout</a> 
		</p>';
	?>
</body>
<html>