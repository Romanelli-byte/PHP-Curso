<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 2 - Resultado</title>
</head>
<body>
    <?php
	// ---------------------------------------------------------------
	function leTemperaturas()
	{
		$v = array();
		$v = $_POST["temp"];
		return $v;
		//return $_POST["temp"];
	}
	// ---------------------------------------------------------------
	function calculaTempMesMaior($t,&$maior,&$mes)
	{
		for ($i = 0; $i < sizeof($t); $i++)
		{
			if($i == 0)
			{
				$maior = $t[$i];
				$mes = $i;
			}
			else
			{
				if($maior < $t[$i])
				{
					$maior = $t[$i];
					$mes = $i;
				}
			}
		}
	}
	// ---------------------------------------------------------------
	function calculaTempMesMenor($t,&$menor,&$mes)
	{
		for ($i = 0; $i < sizeof($t); $i++)
		{
			if($i == 0)
			{
				$menor = $t[$i];
				$mes = $i;
			}
			else
			{
				if($menor > $t[$i])
				{
					$menor = $t[$i];
					$mes = $i;
				}
			}
		}
	}
	// ---------------------------------------------------------------
	function calculaMediaTemp($t)
	{
		$soma = 0;
		for($i = 0; $i < sizeof($t); $i++)
		{
			$soma += $t[$i];
		}
	}
	
	// ---------------------------------------------------------------
		$temperaturas = array();
		
		//recebe as temperaturas em um vetor
		$temperaturas = leTemperaturas();
		
		$maiorTemp = 0;
		$mesMaiorTemp = 0;
		
		//calcula a maior temperatura e o mes em que ocorreu
		calculaTempMesMaior($temperaturas ,$maiorTemp,$mesMaiorTemp);
		
		$menorTemp = 0;
		$mesMenorTemp = 0;
		
		//calcular a menor temperatura e o mes em que ocorreu
		calculaTempMesMenor($temperaturas,$menorTemp,$mesMenorTemp);
		
		//calcula a media da temperatura do ano
		$media = calculaMediaTemp($temperaturas);
		
		echo "A maior temperatura foi de $maiorTemp grau(s) e ocorreu em".qualmes($mesMaiorTemp).".<br>";
		echo "A menor temperatura foi de $menorTemp grau(s) e ocorreu em".qualmes($mesMenorTemp).".<br>";
		echo "A média das temperaturas foi $media grau(s).";
		?>
</body>
</html>