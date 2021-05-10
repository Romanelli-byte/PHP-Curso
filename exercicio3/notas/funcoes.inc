<?php
function cadastra_nota(){
    $nome = $_POST["nome"];
    $nota1 = $_POST["n1"];
    $nota2 = $_POST["n2"];
    
    //abrir o arquivo so para escrita, e coloca o ponteiro no final 
    $arq = fopen("notas.txt", "a");

    //escrever dados no arquivo
    fwrite($arq, "$nome\n");
    fwrite($arq, "$nota1\n");
    fwrite($arq, "$nota2\n");

    //fechar o arquivo

    fclose($arq);

    //mensagem de sucesso
    echo"<h2>Nota cadastrada com sucesso!</h2>";
}

function lista_notas(){

    //verifica se o arquivo existe
    if(file_exists("notas.txt")){

        //abrir o arquivo para leitura
        $arq = fopen("notas.txt", "r");

        //gerar tabela
        echo"<table border=\"1\">";
        echo"<thead>
            <tr>
                <th>Nome</th>
                <th>Prova 1</th>
                <th>Prova 2</th>
                <th>Media</th>
            </tr>
            </thead>";
            echo"<tbody>";
                while(!feof($arq)){
                    $nome = fgets($arq);  
                    $nota1 = fgets($arq);  
                    $nota1 = floatval($nota1);
                    $nota2 = fgets($arq); 
                    $nota2 = floatval($nota2);
                    $media = ($nota1+$nota2)/2;
                    if(!empty($nome))
                    { // evita imprimir linha vazia na tabela devido o \n
                    echo"
                         <tr>	
                            <td>$nome</td>
                            <td>$nota1</td>
                            <td>$nota2</td>
                            <td>$media</td>
                        </tr>";
                    }
                }


            echo"</tbody>";
            echo"</table";
            
            fclose($arq);
        

    }
    else{
        echo"Nenhuma nota inserida!";
    }



}


?>