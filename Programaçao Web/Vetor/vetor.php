<?php

	$meuvetor = array(); //cria vetor vazio
	
	$meuvetor[0] = "batata";
	$meuvetor["nome"] = "Arnaldo";
	$meuvetor["idade"] = 36;
	
	//echo $meuvetor["nome"];
	//echo "<br/> A sua idade é " .$meuvetor["idade"];"<br/>";
	
	$meuvetor[] = 7.5;
	$meuvetor[] = 60;

	//mostra o conteúdo de uma variável/array
	//var_dump($meuvetor);
	
	$vet = array(6,5,8,2);    //$vet = array(0=>6,"numero"=>5,"idade"=>8,3=>2);
	
	for($i = 0; $i < 4; $i++)
	{
		echo $vet[$i]."<br/>";
	}
	  //outro exemplo no próximo Programa//
	
	?>