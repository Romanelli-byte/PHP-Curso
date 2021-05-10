<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        $r = array();
        
        $cnt = 0;
        $cnt1 = 0;
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