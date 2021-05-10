<?php
	session_start();
	
	//$nome = $_SESSION["nome"];
	//$tel  = $_SESSION["telefone"];
	
	//foreach($_SESSION as $vet)
	
	$nome = $_SESSION["nome"];
	$tel = $_SESSION["telefone"];
	
	for($i = 0; $i < sizeof($nome); $i++)
		{
			echo $nome[$i]."---".$tel[$i]."<br/>";
		}
	
//	for($i = 0; $i < sizeof($_SESSION["nome"]); $i++)
//	{
//		echo $_SESSION["nome"][$i]."---".$_SESSION["telefone"][$i]."<br/>";
//	}
//	echo "$nome, seu telefone é $tel. <br/>";
	
	echo "<a href=\"exemplo.php\">Voltar</a>";
	
?>