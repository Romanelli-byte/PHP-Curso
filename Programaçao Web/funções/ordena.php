<?php
    function selection_sort($vet)
	{
        for ($i = 0; $i < sizeof($vet); $i++)
		{
            for ($j = 0; $j < sizeof($vet); $j++)
			{
                if ($vet[$i] < $vet[$j])
				{
                    $aux = $vet[$i];
                    $vet[$i] = $vet[$j];
                    $vet[$j] = $aux;
                    
                }
            }
        }
        return $vet;
    }
	//programa principal
    $v = array("Murilo", "Wener", "Joao", "Ana Carolina", "Ana Clara", "Evely");
    //$nomes = selection_sort($nomes);
    foreach($v as $nome)
	{
        //imprime não ordenado
        echo "$nome ";
    }
    echo "<br>";

    $nomes = selection_sort($v);
    foreach($nomes as $nome)
	{
        // ordenado
        echo "$nome ";
    }
?>