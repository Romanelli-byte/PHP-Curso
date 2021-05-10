<?php
    $matriz = array();

    $cont=1;
    for($i=0; $i<3; $i++){
        $matriz[$i] = array();
        for($j=0; $j<3; $j++){
            $matriz[$i][$j] = $cont++;
        }
    }

    foreach($matriz as $vetor){
        echo "[";
        foreach($vetor as $item){
            echo "$item ";
        }
        echo " ]<br />";
    }


?>