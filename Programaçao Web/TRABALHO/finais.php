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

    
        $vet = array();
          for($i = 0; $i < 4; $i+=2)
          {
              $vet[] = $_POST["Venc$i"];
          } 

          for($i = 0; $i < 1; $i++)
          {
            echo "<fieldset>";

            echo '<input type="radio" value="'.$vet[$i].'" name="Venc"/>';
            echo '<img src="img/'.$vet[$i].'.gif"/>';
            echo  $vet[$i];

            echo '<input type="radio" value="'.$vet[$i+1].'" name="Venc"/>';
            echo '<img src="img/'.$vet[$i+1].'.gif"/>';
            echo  $vet[$i+1];
            
            echo "</fieldset>";
          } 
    
            
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>