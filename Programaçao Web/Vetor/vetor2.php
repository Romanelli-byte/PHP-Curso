<?php

   //$vet = array(6,5,8,2); 
   $vet = array(0=>6,"numero"=>5,"idade"=>8,3=>"praia");
   
	 foreach ($vet as $indice => $item)    //foreach ($vet as $item)
	{
		echo $indice." -- ".$item."<br/>";        //echo $item."<br/>";
	}
	
	$tamanho_vetor = sizeof($vet);           //size = tamanho of = de
	echo "Tamanho: $tamanho_vetor";
	
	//$_POST ou $_GETCH  são vetores
	//seção: armazena dados do seu acesso em um site usando a matriz.
?>
