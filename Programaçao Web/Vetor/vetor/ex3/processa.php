<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <?php
        $u = $_POST["vetor"];

        $cnt = 9;
        $troca = 0;

        for($i = 0; $i < 5; $i++){
            $troca = $u[$cnt];
            $u[$cnt] = $u[$i];
            $u[$i] = $troca;
            $cnt--;
        }

        for($i = 0; $i<10; $i++){
            echo $u[$i]."<br/>";
        }
    ?>
</body>
</html>