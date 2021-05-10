<?php
    function cadastra_contato(){

        $codigo   = $_POST["codigo"];
        $nome     = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email    = $_POST["email"];


        //se o arquivo de cadastro existir
        if (file_exists("contatos.xml")){


            //abro o arquivo xml e armazeno a arvore na variavel
            $contatos = simplexml_load_file("contatos.xml");

            $novo = $contatos->addChild("pessoa");

            $novo = $contatos->addChild("codigo", $codigo);
            $novo = $contatos->addChild("nome", $nome);
            $novo = $contatos->addChild("telefone", $telefone);
            $novo = $contatos->addChild("email", $email);

            //escreve as mudanças arquivo xml
            file_put_contents("contatos.xml", $contato->asXML());

            }
        else{
            //criar o arquivo e inserir o contato
            $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                <contatos>
                    <pessoas>
                        <codigo>$codigo</codigo>
                        <nome>$nome</nome>
                        <telefone>$telefone</telefone>
                        <email>$email</email>
                    </pessoas>
                </contatos>";
            file_put_contents("contato.xml", $texto);

        }
        echo "<h3>Contato cadastrado com sucesso!</h3>";
    }

    function pegaCodigo(){
        if(file_exists("codigo_contato.xml"))
        {
            $cod = simplexml_load_file("codigo_contato.xml");

            $codigo = $cod->codigo;
        }
        else 
        {
            $codigo = 1;
            $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>

            <codigos>
                <codigo>$codigo</codigo>
            </codigos>";

        file_put_contents("codigo_contato.xml", $texto);

        }
        return $codigo;
    }

    function atualizaCodigo(){

        $cod = simplexml_load_file("codigo_contato.xml");

        //atualiza o campo codigo
        $cod->codigo++;

        //grava a atualização
        file_put_contents("codigo_contato.xml", $cod->asXML());
    }

    function lista_contatos(){
        if (file_exists ("contato.xml")){

            $cont = simplexml_load_file("contato.xml");

            echo "<table>";
            echo "<thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>";
                echo "</thead>";
                echo "<tbody>";


            foreach($cont->pessoas as $p){
                //imprimir as linhas da tabela
            echo "<tr>
                        <td>".$p->codigo."</td>
                        <td>".$p->nome."</td>
                        <td>".$p->telefone."</td>
                        <td>".$p->email."</td>
                    </tr>";
                echo "</tbody>";
                echo "</table>";
            }
        }
        else{
            echo "<h3>Não ha contatos cadastrados</h3>";
        }
    }

    function busca_contato(){
        
        if (file_exists("contato.xml")){
            //fazer a busca
            $contato = simplexml_load_file("contato.xml");

            $achou = false;

            $busca = $_POST["busca"];
            
            
            foreach($contato->pessoas as $p){
                // comparar o conteudo das tags com a chave de busca
                if (($busca == $p->nome) || ($busca == $p->telefone) || ($busca == $p->email)){

                    $achou = true;

                    echo "<br/>Código: ".$p->codigo;
                    echo "<br/>Nome: ".$p->nome;
                    echo "<br/>Telefone: ".$p->telefone;
                    echo "<br/>E-mail: ".$p->email;
                   
                }
            }

            if(!$achou){
                echo "Nenhum contato encontrado!";
            }
        }
        else{
            // nenhum contato foi cadastrado
            echo "<h3>Não ha contatos cadastrados</h3>";
        }
    }

?>