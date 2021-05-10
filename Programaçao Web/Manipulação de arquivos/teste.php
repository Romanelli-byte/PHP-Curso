<?php
	//abre o arquivo teste.txt em modo leitura
		//$arq = fopen("teste.txt", "r");
/////////////////////////////////////////////////////////////		
		$arq = fopen("teste.txt", "w");
		$texto = "O rato roeu a \n roupa do rei de Roma";
		fwrite($arq, $texto);
		fclose($arq);
		
		$arq = fopen("teste.txt", "r");
		while(!feof($arq))
		{
			$linha = fgets($arq);
			echo "$linha <br> ";
		}
		fclose($arq);
/////////////////////////////////////////////////////////////	

	//abri o arquivo  para contatenaçao (no final do arquivo)
		$arq = fopen("teste.txt","a");	
		$texto = "\n E o rato morreu.";
		fwrite($arq,$texto);
		fclose($arq);
		
/////////////////////////////////////////////////////////////		
		//$texto = fread($arq,80);
	
	// percorre as linhas
		//$texto  = fgets($arq);
		//echo "$texto"; // 1 linha
		//$texto  = fgets($arq); 
		//echo "$texto";// 2 linha
		//$texto  = fgets($arq); 
		//echo "$texto";// 3 linha
		//$texto  = fgets($arq);
		//echo "$texto";// 4 linha

//////////////////////////////////////////////////////////////
	
	// enquanto nao for o fim do arquivo
		//while(!feof($arq))
		//{
		//	$texto = fgets($arq);
		//	echo "$texto <br> ";
		//}
		
		

	//fecha o arquivo
		//fclose($arq);

?>