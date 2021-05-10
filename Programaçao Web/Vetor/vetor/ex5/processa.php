<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <?php
        $vendas = $_POST["vendas"];
        $percentual = $_POST["prc"];
        $nome = $_POST["nome"];
        
        $cnt = 0;
        for($i = 0; $i < 20; $i++){
            if($i % 2==0){
                $r[$i]= $x[$cnt];
                $cnt++;
            }
            if($i % 2==1){
                $r[$i]= $y[$cnt1];
                $cnt1++;
            }
        }
        for($i = 0; $i < 20; $i++){
            echo $r[$i]." ";
        }

    ?>
</body>
</html>