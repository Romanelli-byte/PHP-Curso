<article>
    <h3>cadastro de novo venda</h3>
    <br/>
    <form action="form_venda_produtos.php" method="POST">
        <p>
            <label>data de venda:</label>
            <input type="date" name="data"/>
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
            <label>produto:</label>
            <select name = "produto">
            <?php
                if(file_exists("produtos.xml"))
                {
                    $con = simplexml_load_file("produtos.xml");
                    foreach($con->produto as $p)
                    {
                        $nome = $p->descricao;
                        echo "<option value=\"$nome\">$nome</option>";
                    }
                }               
                ?>
        </select>
        </p>

           <label>Quantidade:</label>
            <input type="number" name= "quantidade"/>
       </p>
        </p>

           <label></label>
            <input type="submit" value= "cadastrar venda"/>
       </p>
    
   </form>
</article>