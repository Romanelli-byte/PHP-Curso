<?php
	$cor = $_POST["cor"];
	$tamanho = $_POST["tamanho"];
	
	//cria os cookies
	setcookie("cor" ,$cor);
	setcookie("tamanho" ,$tamanho);
	
	//volta para a página inicial
	header("Location: index.php");
?>