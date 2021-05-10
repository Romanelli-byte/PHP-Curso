<?php

    $meuvetor = array(); // cria umvetor vazio

    $meuvetor[0] = "batata";
    $meuvetor["nome"] = "henrique";
    $meuvetor["idade"] = 36;

    //echo $meuvetor["nome"];
    //echo "<br/>a sua idade é ".$meuvetor["idade"];


    $meuvetor[] = 7.5;

    // mostra o conteudo de uma variavel/array
    //var_dump($meuvetor);



    $vet = array(0=>6,"numero"=>5,"idade"=>8,3=>2);

    foreach($vet as $indice => $item){
        echo $indice."->".$item."<br/>";
    }

    $tamanho_vetor = sizeof($vet);
    echo "tamanho: $tamanho_vetor";

?>