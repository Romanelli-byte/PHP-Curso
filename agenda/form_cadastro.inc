<form actio="cadastro_contato.php" method="post">
    <fieldset>
        <p>
            <label>Codigo:</label>
            <?php
            $codigo = pegaCodigo();
            echo "<input type=\"text\" name=\"codigo\" value=\"$codigo\"/>";
            atualizaCodigo();
            ?>
        </p>
        <p>
            <label>Nome:</label>
            <input type="text" name="nome"/>
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
            <input type="submit" name="Cadastrar"/>
        </p>

    </fieldset>
</form>