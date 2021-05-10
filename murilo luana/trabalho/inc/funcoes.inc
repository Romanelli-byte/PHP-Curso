<?php

function cadastra_tarefa(){
    
    $codigo   = $_POST["codigo"];
    $nome     = $_POST["nome"];
    $data = $_POST["data"];
    

    
    if (file_exists("tarefa.xml")){
    
       
        $tarefa = simplexml_load_file("tarefa.xml");

        
        $novo = $tarefa->addChild("tarefa");
       
        $novo->addChild("codigo", $codigo);
        $novo->addChild("nome", $nome);
        $novo->addChild("data", $data);


        
        file_put_contents("tarefa.xml", $tarefa->asXML());

    }
    else{
        
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <listaT>
                    <tarefa>
                        <codigo>$codigo</codigo>
                        <nome>$nome</nome>
                        <data>$data</data>
                    </tarefa>
                  </listaT>";
       
        file_put_contents("tarefa.xml", $texto);
    }
    atualizaCodigoTarefa();;
    echo "<h3>tarefa cadastrado com sucesso.</h3>";
}


function pegaCodigoTarefa(){

    if (file_exists("codigo_tarefa.xml")){
        
        $cod = simplexml_load_file("codigo_tarefa.xml");

        $codigo = $cod->codigo;
    }
    else{
        $codigo = 1;
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <codigos>
                    <codigo>$codigo</codigo>
                  </codigos>";
        
        file_put_contents("codigo_tarefa.xml", $texto);
    }

    return $codigo;
}

function atualizaCodigoTarefa(){

    $cod = simplexml_load_file("codigo_tarefa.xml");
    
    $cod->codigo++;
    
    file_put_contents("codigo_tarefa.xml", $cod->asXML());
}

function lista_tarefa(){

    if (file_exists("tarefa.xml")){

        $cont = simplexml_load_file("tarefa.xml");

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Data da tarefa</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach($cont->tarefa as $p){

           
            echo "<tr>
                    <td>".$p->codigo."</td>
                    <td>".$p->nome."</td>
                    <td>".$p->data."</td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<h3>Não há tarefas cadastrados.</h3>";
    }
}

function busca_tarefa(){

    if (file_exists("tarefa.xml")){
        $data = $_POST["data"];
        $contt = 0;
        $cont = simplexml_load_file("tarefa.xml");

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Data da tarefa</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach($cont->tarefa as $p){
            if($data == $p->data){
                echo "<tr>
                        <td>".$p->codigo."</td>
                        <td>".$p->nome."</td>
                        <td>".$p->data."</td>
                    </tr>";
                $contt ++;
            }
        }
        if($contt == 0){
            echo"<tr><td colspan=\"3\">Não há tarefas cadastradas nessa data</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<h3>Não há tarefas cadastradas nessa data.</h3>";
    }
}

