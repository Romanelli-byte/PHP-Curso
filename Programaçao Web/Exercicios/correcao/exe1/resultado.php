<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1 - Resultado</title>
</head>
<body>
    <?php
	//--------------------------------------
	function maioresQueZero($a,$b,$c)
	{
		if(($a > 0) && ($b > 0) && ($c > 0))
			return true;
		else
			return false;
	}
	//--------------------------------------
	function formaTriangulo($a,$b,$c)
	{
		if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b))
			return true;
		else
			return false;
	}
	//--------------------------------------
	function tipoTriangulo($a,$b,$c)
	{
		if(($a == $b) && ($b == $c))
		{
		return "equilátero";
		}
		elseif (($a != $b) && ($b != $c) && ($c != $a))
		{
			return "escaleno";
		}
		else
		{
			return "isóceles";
		}
	}
	//--------------------------------------
	$ladoa = $_POST["la"];
	$ladob = $_POST["lb"];
	$ladoc = $_POST["lc"];
	
	//verifica se todos os lados são maiores que zero
	//no caso positivo,$maiorzero é igual a true
	$maiorzero = maioresQueZero($ladoa,$ladob,$ladoc);
	
	// if($maiorzero)
	if ($maiorzero == true)
	{
		//verifica se os lados formam um triangulo
		// no caso positivo, $formatriang é igual a true
		$formatriang = formatriangulo($ladoa,$ladob,$ladoc);
		
		if($formatriang == true)
		{
			//verifica  tipo de triangulo formado pelos lados
			//$tipotriang recebe o tipo de triangulo
			$tipotriang = tipoTriangulo($ladoa,$ladob,$ladoc);
			echo "Os lados formam um triângulo $tipotriang.";
		}
		else
		{
			echo "Os lados não formam um triângulo.";
		}
	}	
	?>
</body>
</html>