<?php

function cadastra_clientes(){
    
    $codigo   = $_POST["codigo"];
    $nome     = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email    = $_POST["email"];
    $louga    = $_POST["logra"];
    $numero   = $_POST["numero"];
    $comple   = $_POST["comple"];
    $bairro   = $_POST["bairro"];
    $cidade   = $_POST["cidade"];
    $cep      = $_POST["cep"];
    $cpf      = $_POST["cpf"];
    

    
    if (file_exists("clientes.xml")){
    
       
        $contatos = simplexml_load_file("clientes.xml");

        
        $novo = $contatos->addChild("pessoa");
       
        $novo->addChild("codigo", $codigo);
        $novo->addChild("nome", $nome);
        $novo->addChild("logra", $louga);
        $novo->addChild("num", $numero);
        $novo->addChild("comple", $comple);
        $novo->addChild("bairro", $bairro);
        $novo->addChild("cidade", $cidade);
        $novo->addChild("cep", $cep);
        $novo->addChild("telefone", $telefone);
        $novo->addChild("email", $email);
        $novo->addChild("cpf", $cpf);


        
        file_put_contents("clientes.xml", $contatos->asXML());

    }
    else{
        
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <clientes>
                    <pessoa>
                        <codigo>$codigo</codigo>
                        <nome>$nome</nome>
                        <logra>$louga</logra>
                        <num>$numero</num>
                        <comple>$comple</comple>
                        <bairro>$bairro</bairro>
                        <cidade>$cidade</cidade>
                        <cep>$cep</cep>
                        <telefone>$telefone</telefone>
                        <email>$email</email>
                        <cpf>$cpf</cpf>
                    </pessoa>
                  </clientes>";
       
        file_put_contents("clientes.xml", $texto);
    }
    atualizaCodigoCliente();;
    echo "<h3>Cliente cadastrado com sucesso.</h3>";
}
function cadastra_jogos(){
    
    
    $codigo   = $_POST["codigo"];
    $titulo     = $_POST["titulo"];
    $genero = $_POST["genero"];
    $classi    = $_POST["classi"];
    $quant    = $_POST["quant"];
    $preco   = $_POST["preco"];
    
    

    if (file_exists("produtos.xml")){
    
        
        $contatos = simplexml_load_file("produtos.xml");

      
        $novo = $contatos->addChild("jogo");
      
        $novo->addChild("codigo", $codigo);
        $novo->addChild("titulo", $titulo);
        $novo->addChild("genero", $genero);
        $novo->addChild("classi", $classi);
        $novo->addChild("quant", $quant);
        $novo->addChild("preco", $preco);
        

        
        file_put_contents("produtos.xml", $contatos->asXML());

    }
    else{
        
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <produtos>
                    <jogo>
                        <codigo>$codigo</codigo>
                        <titulo>$titulo</titulo>
                        <genero>$genero</genero>
                        <classi>$classi</classi>
                        <quant>$quant</quant>
                        <preco>$preco</preco>
                    </jogo>
                  </produtos>";
       
        file_put_contents("produtos.xml", $texto);
    }
    atualizaCodigoJogo();
    echo "<h3>jogo cadastrado com sucesso.</h3>";
}

function cadastra_vendas(){
    
    
    $codigo   = $_POST["numerodevenda"];
    $data     = $_POST["datavenda"];
    $cliente = $_POST["cliente"];
    $jogo    = $_POST["jogo"];
    $quantV   = $_POST["quant"];

    if (file_exists("produtos.xml")){
        $cont = simplexml_load_file("produtos.xml");
        foreach($cont->jogo as $p)
                    {   
                        if($jogo = $p->titulo){
                            $estoque = $p->quant;
                            $preco = $p->preco;
                            break;
                        }
                    }
        $entrar = $estoque - $quantV;
        if(($entrar == 0)||($entrar < 0)){
           
            if (file_exists("vendas.xml")){
                $contatos = simplexml_load_file("vendas.xml");

                $novo = $contatos->addChild("venda");
                
                $novo->addChild("codigo", $codigo);
                $novo->addChild("data", $data);
                $novo->addChild("cliente", $cliente);
                $novo->addChild("jogo", $jogo);
                $novo->addChild("quant", $quantV);
                
                

                
                file_put_contents("vendas.xml", $contatos->asXML());

            }
            else{
                
                $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                        <vendas>
                            <venda>
                                <codigo>$codigo</codigo>
                                <data>$data</data>
                                <cliente>$cliente</cliente>
                                <jogo>$jogo</jogo>
                                <quant>$quantV</quant>
                            </venda>
                        </vendas>";
                
                file_put_contents("vendas.xml", $texto);
            }
            $quantil = $quantV - $quanti; 
            foreach($cont->jogo as $p)
                    {   
                        if($jogo == $p->titulo){
                            $p->quant = $quantil;
                        }
                    }
                    $total = $quantV * $preco;
                    atualizaCodigoVenda();
            echo "<h3>Venda realizada com sucesso.<br/>Valor: $total </h3>";
        }else{
            echo "<h3>Este produto esta em falta no estoque!</h3>";
        }
    }else{
        echo "<h3>Este produto esta em falta no estoque!</h3>";
    }
}


function pegaCodigoCliente(){

    if (file_exists("codigo_cliente.xml")){
        
        $codC = simplexml_load_file("codigo_cliente.xml");

        $codigoC = $codC->codigo;
    }
    else{
        $codigoC = 1;
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <codigos>
                    <codigo>$codigoC</codigo>
                  </codigos>";
        
        file_put_contents("codigo_cliente.xml", $texto);
    }

    return $codigoC;
}

function atualizaCodigoCliente(){

    $codC = simplexml_load_file("codigo_cliente.xml");
    
    $codC->codigo++;
    
    file_put_contents("codigo_cliente.xml", $codC->asXML());
}

function pegaCodigoJogo(){

    if (file_exists("codigo_jogo.xml")){
        
        $codJ = simplexml_load_file("codigo_jogo.xml");

        $codigoJ = $codJ->codigo;
    }
    else{
        $codigoJ = 1;
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <codigos>
                    <codigo>$codigoJ</codigo>
                  </codigos>";
        
        file_put_contents("codigo_jogo.xml", $texto);
    }

    return $codigoJ;
}

function atualizaCodigoJogo(){

    $codJ = simplexml_load_file("codigo_jogo.xml");
    
    $codJ->codigo++;
    
    file_put_contents("codigo_jogo.xml", $codJ->asXML());
}

function pegaCodigoVenda(){

    if (file_exists("codigo_venda.xml")){
        
        $codV = simplexml_load_file("codigo_venda.xml");

        $codigoV = $codV->codigo;
    }
    else{
        $codigoV = 1;
        $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                  <codigos>
                    <codigo>$codigoV</codigo>
                  </codigos>";
        
        file_put_contents("codigo_venda.xml", $texto);
    }

    return $codigoV;
}

function atualizaCodigoVenda(){

    $codV = simplexml_load_file("codigo_venda.xml");
    
    $codV->codigo++;
    
    file_put_contents("codigo_venda.xml", $codV->asXML());
}
function lista_clientes(){

    if (file_exists("clientes.xml")){

        $cont = simplexml_load_file("clientes.xml");

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>logradoura</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach($cont->pessoa as $p){

           
            echo "<tr>
                    <td>".$p->codigo."</td>
                    <td>".$p->nome."</td>
                    <td>".$p->logra."</td>
                    <td>".$p->num."</td>
                    <td>".$p->comple."</td>
                    <td>".$p->bairro."</td>
                    <td>".$p->cidade."</td>
                    <td>".$p->cep."</td>
                    <td>".$p->telefone."</td>
                    <td>".$p->email."</td>
                    <td>".$p->cpf."</td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<h3>Não há clientess cadastrados.</h3>";
    }
}
function lista_jogos(){

    if (file_exists("produtos.xml")){

        $cont = simplexml_load_file("produtos.xml");

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Classificação</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach($cont->jogo as $p){

           
            echo "<tr>
                    <td>".$p->codigo."</td>
                    <td>".$p->titulo."</td>
                    <td>".$p->genero."</td>
                    <td>".$p->classi."</td>
                    <td>".$p->quant."</td>
                    <td>".$p->preco."</td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<h3>Não há jogos cadastrados.</h3>";
    }
}

function lista_vendas(){

    if (file_exists("vendas.xml")){

        $cont = simplexml_load_file("vendas.xml");

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Número da Venda</th>
                    <th>Data da Venda</th>
                    <th>Cliente</th>
                    <th>Jogo</th>
                    <th>Quantidade</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach($cont->venda as $p){

           
            echo "<tr>
                    <td>".$p->codigo."</td>
                    <td>".$p->data."</td>
                    <td>".$p->cliente."</td>
                    <td>".$p->jogo."</td>
                    <td>".$p->quant."</td>
                  </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<h3>Não há vendas cadastrados.</h3>";
    }
}
