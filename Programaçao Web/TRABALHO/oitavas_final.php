<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Oitavas de Final</title>
    <style>
        img{
            width: 70px;
            height: 35px;
            }
    </style>

    <!--Jogo 1: 1º grupo A x 2º grupo B
        Jogo 2: 1º grupo C x 2º grupo D
        Jogo 3: 1º grupo E x 2º grupo F
        Jogo 4: 1º grupo G x 2º grupo H

        Jogo 5: 1º grupo B x 2º grupo A
        Jogo 6: 1º grupo D x 2º grupo C
        Jogo 7: 1º grupo F x 2º grupo E
        Jogo 8: 1º grupo H x 2º grupo G -->
</head>
<body>
    <form action="quartas_final.php" method="POST">
        <?php
            $grupoA_1 = $_POST["grupoA_1"];
            $grupoA_2 = $_POST["grupoA_2"];

            $grupoB_1 = $_POST["grupoB_1"];
            $grupoB_2 = $_POST["grupoB_2"];

            $grupoC_1 = $_POST["grupoC_1"];
            $grupoC_2 = $_POST["grupoC_2"];

            $grupoD_1 = $_POST["grupoD_1"];
            $grupoD_2 = $_POST["grupoD_2"];

            $grupoE_1 = $_POST["grupoE_1"];
            $grupoE_2 = $_POST["grupoE_2"];

            $grupoF_1 = $_POST["grupoF_1"];
            $grupoF_2 = $_POST["grupoF_2"];

            $grupoG_1 = $_POST["grupoG_1"];
            $grupoG_2 = $_POST["grupoG_2"];

            $grupoH_1 = $_POST["grupoH_1"];
            $grupoH_2 = $_POST["grupoH_2"];  
         

            $v1 = array($grupoA_1, $grupoC_1, $grupoE_1, $grupoG_1, $grupoB_1, $grupoD_1, $grupoF_1, $grupoH_1);
            $v2 = array($grupoB_2, $grupoD_2, $grupoF_2, $grupoH_2, $grupoA_2, $grupoC_2, $grupoE_2, $grupoG_2); 

            echo "<h2>Oitavas de Final - Fase de Grupos</h2>";
            for ($i = 0; $i < 8; $i++)
            {
                $n = $i+1;
                echo "<fieldset><legend>Jogo $n</legend>";
                echo "Selecione o vencedor:<br>";

                echo '<input type="radio" value="'.$v1[$i].'" name="vencedor'.$i.'"/>';
                echo '<img src="img/'.$v1[$i].'.gif"/>';
                echo  $v1[$i];

                echo '<input type="radio" value="'.$v2[$i].'" name="vencedor'.$i.'"/>';
                echo '<img src="img/'.$v2[$i].'.gif"/>';
                echo  $v2[$i];
               
                echo "</fieldset>";
            }

            
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>