<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 4</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        $r = array();
        
        $vet = 0;
        $vet1 = 0;
		
        for($i = 0; $i < 20; $i++)
		{
            if($i % 2==0)
			{
                $r[$i]= $x[$vet];
                $vet++;
            }
            if($i % 2==1)
			{
                $r[$i]= $y[$vet1];
                $vet1++;
            }
        }
        for($i = 0; $i < 20; $i++)
		{
			echo $r[$i]." ";
		}
    ?>
</body>
</html>