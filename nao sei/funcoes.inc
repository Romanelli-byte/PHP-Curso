<?php
    function cadastrar_cliente(){

        $_SESSION["Cnome"][] = $_POST["nome"];
        $_SESSION["Cendereco"][] = $_POST["endereco"];
        $_SESSION["Ctelefone"][] = $_POST["telefone"];
        $_SESSION["Cemail"][] = $_POST["email"];
        $_SESSION["Ccpf"][] = $_POST["cpf"];
    

        echo " <article>
                    <br/>
                    <br/>
                    <h3>O Cliente foi cadastrado com sucesso.</h3>
                </article>";

    }
    function listar_clientes(){

        if(isset($_SESSION["Cnome"])){
            echo "<table>";

            echo "<thead>";

            echo "<tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                </tr>";
            echo "</thead>";
            echo "<tbody>";

            for($i = 0; $i < sizeof($_SESSION["Cnome"]); $i++){

                echo"<tr>

                        <td>".$_SESSION["Cnome"][$i]."</td>
                        <td>".$_SESSION["Cendereco"][$i]."</td>
                        <td>".$_SESSION["Ctelefone"][$i]."</td>
                        <td>".$_SESSION["Cemail"][$i]."</td>
                        <td>".$_SESSION["Ccpf"][$i]."</td>
                    </tr>";

            }
            echo "</tbody>";
            echo "</table>";
        }
        else{
            echo "<article>
                    <h3> Não há clientes cadastrados.</h3>
                </article>";
        }
    }
    function cadastrar_produtos(){

        $_SESSION["Pcodigo"][] = $_POST["codigo"];
        $_SESSION["Pdescricao"][] = $_POST["descricao"];
        $_SESSION["Ppreco"][] = $_POST["preco"];

    

        echo " <article>
                    <br/>
                    <br/>
                    <h3>O Cliente foi cadastrado com sucesso.</h3>
                </article>";
    }
function listar_produtos(){
    if(isset($_SESSION["Pcodigo"])){
        echo "<table>";

        echo "<thead>";

        echo "<tr>
                <th>Codigo</th>
                <th>Descricao</th>
                <th>Preço</th>
            </tr>";
        echo "</thead>";
        echo "<tbody>";

        for($i = 0; $i < sizeof($_SESSION["Cnome"]); $i++){

            echo"<tr>

                    <td>".$_SESSION["Pcodigo"][$i]."</td>
                    <td>".$_SESSION["Pdescricao"][$i]."</td>
                    <td>".$_SESSION["Ppreco"][$i]."</td>
                </tr>";

        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<article>
                <h3> Não há clientes cadastrados.</h3>
            </article>";
    }
}

?>