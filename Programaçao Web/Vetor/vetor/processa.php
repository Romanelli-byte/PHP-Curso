<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <?php
        $valores = $_POST["valor"];

        $tamanho = sizeof($valores);
        $maior = 0;
        $menor = 0;
        for($i = 0; $i < $tamanho; $i++){
            if($i==0){
                $maior = $menor = $valores[$i];
            }
            if($valores[$i] > $maior){
                $maior = $valores[$i];
            }
            if($valores[$i] < $menor){
                $menor = $valores[$i];
            }
        }
        echo "o maior valor é: $maior<br/>";
        echo "o menor valor é: $menor";
    ?>
</body>
</html>