<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Semifinais</title>
    <style>
        img{
            width: 70px;
            height: 35px;
            }
    </style>
</head>
<body>
    <form action="finais.php" method="POST">
        <?php

        if (!empty($_POST))
        {
        $vet = array();
        //$vet2 = array("A", "A","B","B", "C","C", "D", "D"); 
          for($i = 0; $i < 8; $i+=2)
          {
              $vet[] = $_POST["$i"];
          } 

          for($i = 0; $i < 4; $i+=2)
          {
            echo "<fieldset>";

            echo '<input type="radio" value="'.$vet[$i].'" name="Venc'.$i.'"/>';
            echo '<img src="img/'.$vet[$i].'.gif"/>';
            echo  $vet[$i];

            echo '<input type="radio" value="'.$vet[$i+1].'" name="Venc'.$i.'"/>';
            echo '<img src="img/'.$vet[$i+1].'.gif"/>';
            echo  $vet[$i+1];
            
            echo "</fieldset>";
          }
        }
        else{
            $_SESSION["0"][] = $_POST["Venc1"];
            $_SESSION["1"][] = $_POST["Venc2"];

            $_SESSION["finais"] = $vet;

            echo "hellooo";
            
        } 
    
            
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>