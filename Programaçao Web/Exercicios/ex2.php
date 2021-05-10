<!-- Exercício 2 . Faça um programa em PHP para analisar as temperaturas médias de cada mês
do ano. Assim o programa deve conter as seguintes funções para:
● Receber a temperatura média de cada mês do ano e armazene-as em um vetor (array);
● Receber um mês em número e retornar o mês por extenso: 0 – janeiro; 1 – fevereiro; 2
– março; ...);
● Calcular e retornar a maior temperatura do ano e em qual mês ocorreu;
● Calcular e retornar a menor temperatura do ano e em qual mês ocorreu;
● Calcular e retornar a média anual de temperaturas. -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercício 2</title>
</head>
<body>
    <form action="ex2.php" method="POST">
    <?php
        if (empty($_POST)){
            for ($i = 0; $i < 12; $i++){
            	$num = $i + 1;
                echo "<p>Mês $num: <input type=\"number\" name=\"$i\"/></p>";
            }
            echo "<input type=\"submit\" value=\"Enviar\" />";
        }
        else{
            function armazena(){
                $vet = array();
                for ($i = 0; $i < 12; $i++){
                    $vet[$i] = $_POST[$i];
                }
                return $vet;
            }

            function nome($mes){
                if ($mes == 0)
                    return "Janeiro";
                if ($mes == 1)
                    return "Fevereiro";
                if ($mes == 2)
                    return "Março";
                if ($mes == 3)
                    return "Abril";
                if ($mes == 4)
                    return "Maio";
                if ($mes == 5)
                    return "Junho";
                if ($mes == 6)
                    return "Julho";
                if ($mes == 7)
                    return "Agosto";
                if ($mes == 8)
                    return "Setembro";
                if ($mes == 9)
                    return "Outubro";
                if ($mes == 10)
                    return "Novembro";
                if ($mes == 11)
                    return "Dezembro";
            }        
            
            function maior($vet){
                $maior = 0;
                for ($i = 0; $i < 12; $i++){
                    if ($maior < $vet[$i]){
                        $maior = $vet[$i];
                        $mes = nome($i);
                        }
                    }
                return "A maior temperatura é $maior, no mês $mes<br>";
            }

            function menor($vet){
                $menor = 100000;
                $mes = 0;
                for ($i = 0; $i < 12; $i++){
                    if ($menor > $vet[$i]){
                        $menor = $vet[$i];
                        $mes = nome($i);
                        }
                    }
                return "A menor temperatura é $menor, no mês $mes";
            }

            function media($vet){
                $media = 0;
                for ($i = 0; $i < 12; $i++){
                   $media += $vet[$i];
                }
                return $media / sizeof($vet);
            }

        $vetor = armazena();
        echo maior($vetor);
        echo menor($vetor);
        echo "<br>A média de temperatura é ".media($vetor);

        }
    ?>
    </form>
</body>
</html>
