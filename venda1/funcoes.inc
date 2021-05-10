<?php
function cadastra_cliente(){

    $nome= $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
   
    if(file_exists("clientes.xml"))
        {
            $cliente = simplexml_load_file("clientes.xml");

            $novo = $cliente->addChild("pessoa");
            $novo->addChild("nome",$nome);
            $novo->addChild("endereco",$endereco);
            $novo->addChild("telefone",$telefone);
            $novo->addChild("email",$email);
            $novo->addChild("cpf",$cpf);

            file_put_contents("clientes.xml",$cliente->asXML());

            echo "<article>
                    <br/>
                    <br/>
                    <h3> o cliente foi cadastrado com sucesso.</h3>
                </article>";
            
        }else{

            $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                    <cliente>
                        <pessoa>
                            <nome>$nome</nome>
                            <endereco>$endereco</endereco>
                            <telefone>$telefone</telefone>
                            <email>$email</email>
                            <cpf>$cpf</cpf>
                        </pessoa>
                    </cliente>";
            file_put_contents('clientes.xml',$texto);
            echo "<article>
                    <br/>
                    <br/>
                    <h3> o cliente foi cadastrado com sucesso.</h3>
                </article>";
        }


}

    function listar_cliente()
    {
        if(file_exists("clientes.xml"))
        {
            $cont = simplexml_load_file("clientes.xml");
            echo "<table border=\"1\">";
            echo "<thead>";
            echo "<tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Cpf</th>
                </tr>";
            foreach($cont->pessoa as $p){
                echo "<tr>
                        <td>".$p->nome."</td>
                        <td>".$p->endereco."</td>
                        <td>".$p->telefone."</td>
                        <td>".$p->email."</td>
                        <td>".$p->cpf."</td>
                    </tr>";
            }
            echo "</table>";
            echo "</thead>";
        }else{
            echo "<h3>Não há clientes cadastrados.</h3>";
        }

    }

    function cadastra_produto()
    {
        $codigo = $_POST["codigo"];
        $descricao= $_POST["descricao"];
        $preco = $_POST["preco"];

        if(file_exists("produtos.xml"))
        {
            $pro = simplexml_load_file("produtos.xml");

            $novo = $pro->addChild("produto");
            $novo->addChild("codigo",$codigo);
            $novo->addChild("descricao",$descricao);
            $novo->addChild("preco",$preco);
            file_put_contents("produtos.xml",$pro->asXML());

            echo "<article>
                    <br/>
                    <br/>
                    <h3> o produto foi cadastrado com sucesso.</h3>
                </article>";
            
        }else{

            $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                    <produtos>
                        <produto>
                            <codigo>$codigo</codigo>
                            <descricao>$descricao</descricao>
                            <preco>$preco</preco>
                        </produto>
                    </produtos>";
            file_put_contents('produtos.xml',$texto);
            echo "<article>
                    <br/>
                    <br/>
                    <h3> o produto foi cadastrado com sucesso.</h3>
                </article>";
        }
    }

    function listar_produtos()
    {
        if(file_exists("produtos.xml"))
        {
            $cont = simplexml_load_file("produtos.xml");
            echo "<table border=\"1\">";
            echo "<thead>";
            echo "<tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>";
            foreach($cont->produto as $p){
                echo "<tr>
                        <td>".$p->codigo."</td>
                        <td>".$p->descricao."</td>
                        <td>".$p->preco."</td>
                    </tr>";
            }
            echo "</table>";
            echo "</thead>";
        }else{
            echo "<h3>Não há produtos cadastrados.</h3>";
        }
    }

function cadastra_venda(){

    $data = $_POST["data"];
    $cliente = $_POST["cliente"];

    $produto = $_POST["produto"];
    if(file_exists("produtos.xml"))
    {
        $con = simplexml_load_file("produtos.xml");
        foreach($con->produto as $p)
        {
            if($produto == $p->descricao)
            {
                $preco = $p->preco;
            }
        }
    } 
    $quantidade = $_POST["quantidade"];

    $preco_final = $_POST["quantidade"] * $preco; 
    $preco_final = number_format($preco_final,2);
   
    if(file_exists("vendas.xml"))
        {
            $pro = simplexml_load_file("vendas.xml");

            $novo = $pro->addChild("venda");
            $novo->addChild("data",$data);
            $novo->addChild("cliente",$cliente);
            $novo->addChild("produto",$produto);
            $novo->addChild("quantidade",$quantidade);
            $novo->addChild("total",$preco_final);
            file_put_contents("produtos.xml",$pro->asXML());

            echo "<article>
                        <br/>
                        <br/>
                        <h3> A venda custou R\$ $preco_final e foi cadastrada com sucesso.</h3>
                        </article>";
            
        }else{

            $texto = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                    <vendas>
                        <venda>
                            <data>$data</data>
                            <cliente>$cliente</cliente>
                            <produto>$produto</produto>
                            <quantidade>$quantidade</quantidade>
                            <total>$preco_final</total>
                        </venda>
                    </vendas>";
            file_put_contents('vendas.xml',$texto);
            echo "<article>
                        <br/>
                        <br/>
                        <h3> A venda custou R\$ $preco_final e foi cadastrada com sucesso.</h3>
                        </article>";
        }
}

function listar_vendas()
{
    if(file_exists("vendas.xml"))
    {
        $cont = simplexml_load_file("vendas.xml");
        echo "<table border=\"1\">";
        echo "<thead>";
        echo "<tr>
                <th>Data da venda</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade Vendida</th>
                <th>Preço Total</th>
            </tr>";
        foreach($cont->venda as $p){
            echo "<tr>
                    <td>".$p->data."</td>
                    <td>".$p->cliente."</td>
                    <td>".$p->produto."</td>
                    <td>".$p->quantidade."</td>
                    <td>".$p->total."</td>
                </tr>";
        }
        echo "</table>";
        echo "</thead>";
    }else{
        echo "<h3>Não há venda cadastrados.</h3>";
    }
}
?>