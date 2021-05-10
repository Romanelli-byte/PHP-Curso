<form action="form_cadastro_cliente.php" method="POST">
    <fieldset>
        <p>
            <label>Código:</label>
            <?php
                $codigo = pegaCodigoCliente();
                echo "<input type=\"text\" name=\"codigo\" value=\"$codigo\"/>";
            ?>
        </p>
        <p>
            <label>Nome:</label>
            <input type="text" name="nome"/>
        </p>
        <p>
            <label>Logradouro:</label>
            <input type="text" name="logra"/>
        </p>
        <p>
            <label>Número:</label>
            <input type="text" name="numero"/>
        </p>
        <p>
            <label>complemento:</label>
            <input type="text" name="comple"/>
        </p>
        <p>
            <label>Bairro:</label>
            <input type="text" name="bairro"/>
        </p>
        <p>
            <label>Cidade:</label>
            <input type="text" name="cidade"/>
        </p>
        <p>
            <label>CEP:</label>
            <input type="text" name="cep"/>
        </p>
        <p>
            <label>Telefone:</label>
            <input type="tel" name="telefone"/>
        </p>
        <p>
            <label>E-mail:</label>
            <input type="email" name="email"/>
        </p>
        <p>
            <label>CPF:</label>
            <input type="text" name="cpf"/>
        </p>
        <p>
            <input type="submit" value="Cadastrar"/>
        </p>
    </fieldset>
</form>