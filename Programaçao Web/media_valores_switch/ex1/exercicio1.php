<DOCTYPE html>
<html lang="pt-br">

<?php
	$nota1= $_POST["nota1"];
	$nota2 = $_POST["nota2"];
	$nota3 = $_POST["nota3"];
	
	$media = ($nota1 + $nota2 + $nota3)/3.0;
	
	if($media < 4.0)
	{
		echo "reprovado";
	}
	
	elseif (($media >=4.0) && ($media < 6.0))
	{
		echo "reavaliacao";
	}
	else
	{
		echo "aprovado";
	}
?>