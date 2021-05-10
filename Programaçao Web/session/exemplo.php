<?php
	session_start(); //inicia uma sessao
	
	$_SESSION["nome"][] = "Mariana";
	$_SESSION["nome"][] = "Ana Carolina";
	$_SESSION["nome"][] = "Maria Fernanda";
	$_SESSION["telefone"][] = "(16) 12345-6789";
	$_SESSION["telefone"][] = "(16) 999758-3527";
	$_SESSION["telefone"][] = "(16) 9876-54321";
	
	echo "<a href=\"exemplo2.php\">Página seguinte</a>";
		
	?>