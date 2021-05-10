<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 2</title>
</head>
<body>
    <?php
        $r = $_POST["vetr"];
        $s = $_POST["vets"];
        $v = array();

        $cnt1 = 0;
        $cnt2 = 0;
        for($i = 0; $i < 10; $i++){
            if($i < 3){
                $v[$i] = $r[$cnt1];
                $cnt1++; 
            }
            else{
                $v[$i] = $s[$cnt2];
                $cnt2++;
            }
        }
        for($i = 0; $i < 10; $i++){
            echo $v[$i]."<br/>";
        }
    ?>
</body>
</html>