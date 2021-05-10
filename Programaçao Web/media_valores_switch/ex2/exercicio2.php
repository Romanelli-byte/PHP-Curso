<DOCTYPE html>
<html lang="pt-br">

<?php
	$n1= $_POST["num1"];
	$n2 = $_POST["num2"];
	$n3 = $_POST["num3"];
	
	
	if(($n1 < $n2) && ($n1 < $n3))
	{
		if($n2 < $n3) 
		{
			echo "$n1,$n2,$n3";
		}
		else
		{
			echo "$n1,$n3,$n2";
		}
			
	}
	if (($n2 < $n1) && (&n2 < &n3))
	{
		if ($n3 < $n1)
		{ 
			echo "$n2,$n3,$n1";
		}
		else
		{
			echo "$n2,$n1,$n3";
		}
	}
	if (($n3 < $n1) && (&n3 < &n2))
	{
		if ($n2 < $n1)
		{ 
			echo "$n3,$n2,$n1";
		}
		else
		{
			echo "$n3,$n1,$n2";
		}
	}
	
?>