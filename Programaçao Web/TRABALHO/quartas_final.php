<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quartas de Final</title>
    <style>
        img{
            width: 70px;
            height: 35px;
            }
    </style>
</head>
<body>
    <form action="semifinais.php" method="POST">
        <?php
        $vet = array();
        $vet2 = array("A", "A","B","B", "C","C", "D", "D"); 
          for($i = 0; $i < 8; $i++)
          {
              $vet[$i] = $_POST["vencedor$i"];
          } 

          for($i = 0; $i < 8; $i+=2)
          {
            echo "<fieldset><legend>Jogo $vet2[$i]</legend>";

            echo '<input type="radio" value="'.$vet[$i].'" name="'.$i.'"/>';
            echo '<img src="img/'.$vet[$i].'.gif"/>';
            echo  $vet[$i];

            echo '<input type="radio" value="'.$vet[$i+1].'" name="'.$i.'"/>';
            echo '<img src="img/'.$vet[$i+1].'.gif"/>';
            echo  $vet[$i+1];
            
            echo "</fieldset>";
          } 

            
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>