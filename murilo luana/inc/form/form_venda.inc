<form action="form_venda_jogos.php" method="POST">
    <fieldset>
        <p>
            <label>Código:</label>
            <?php
                $codigo = pegaCodigoVenda();
                echo "<input type=\"text\" name=\"numerodevenda\" value=\"$codigo\"/>";
            ?>
        </p>
        <p>
            <label>Data da Venda:</label>
            <input type="date" name="datavenda"/>
        </p>
        <p>
            <label>cliente:</label>
            <select name = "cliente">
            <?php
                if(file_exists("clientes.xml"))
                {
                    $con = simplexml_load_file("clientes.xml");
                    foreach($con->pessoa as $p)
                    {
                        $nome = $p->nome;
                        echo "<option value=\"$nome\">$nome</option>";
                    }
                }
            ?>
        </select>
        </p>
        <p>
            <label>jogo:</label>
            <select name = "jogo">
            <?php
                if(file_exists("produtos.xml"))
                {
                    $conT = simplexml_load_file("produtos.xml");
                    foreach($conT->jogo as $p)
                    {
                        $nome = $p->titulo;
                        echo "<option value=\"$nome\">$nome</option>";
                    }
                }
            ?>
        </select>
        </p>
        <p>
            <label>Quantidade vendida:</label>
            <input type="text" name="quant"/>
        </p>
        <p>
            <input type="submit" value="Cadastrar"/>
        </p>
    </fieldset>
</form>