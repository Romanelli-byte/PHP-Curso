<?php
 
	$meuvetor[] = 67;
	$meuvetor[] = 90;
	
	$matriz = array(); //cria vetor vazio
  
	for($i = 0; $i < 3; $i++)
	{
		for($j = 0; $j < 6; $j++)
		{
			$matriz[$i][] = $i*$j;
		}
	}

	foreach($matriz as $vetor)
	{
		foreach($vetor as $item)
		{
			echo "$item";
		}
		echo "<br/>";
	}
	
?>