<!-- Exercício 1.Faça um programa em PHP que receba três valores (obrigatoriamente maiores
que zero), representando as medidas dos três lados de um triângulo. Elabore funções
(sub-rotinas) para:
● Validar se os valores informados são maiores que zero;
● Determinar se esses lados informados forma um triângulo (sabe-se que, para ser
triângulo, a medida de um lado qualquer deve ser inferior à soma das medidas dos
outros dois lados);
● Determinar e retornar o tipo de triângulo (equilátero, isósceles ou escaleno), caso as
medidas formem um triângulo.
* Todas as mensagens devem ser mostradas no programa principal (fora que qualquer função). -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1 - Resultado </title>
</head>
<body>
    <?php
    function Nzero($n1, $n2, $n3)
	{
        if ($n1 > 0 && $n2 > 0 && $n3 > 0)
            return true;
        
        else
            return false;
    }

    function triangulo($n1, $n2, $n3)
	{
        $a = 0;

        if ($n1 > ($n2 + $n3))
            $a++;
        if ($n2 > ($n1 + $n3))
            $a++;
        if ($n3 > ($n2 + $n1))
            $a++;

        if ($a == 0)
            return true;
    }

    function tipo($n1, $n2, $n3)
	{
        if ($n1 == $n2 && $n2 == $n3)
            return "Equilátero";
        else if ($n1 == $n2 || $n1 == $n3|| $n2 == $n3)
            return "Isóceles";

        else if ($n1 == $n2 && $n2 == $n3)
            return "Equilátero";
        else
		{
           return "Escaleno";
		}
    }

    $n1 = $_POST["l1"];
    $n2 = $_POST["l2"];
    $n3 = $_POST["l3"];

    if (Nzero($n1, $n2, $n3))
	{
        if (triangulo($n1, $n2, $n3))
		{
            echo "Medidas formam um triângulo";
            echo "do tipo ".tipo($n1, $n2, $n3);
        }
        else
		{
            echo "Medidas não formam um triângulo.";
        }
    }
    else
	{
        echo "Número Inválido.";
    }
    ?>
</body>
</html>