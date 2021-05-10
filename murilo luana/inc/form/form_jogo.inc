<form action="form_cadastro_jogo.php" method="POST">
    <fieldset>
        <p>
            <label>Código:</label>
            <?php
                $codigo = pegaCodigoJogo();
                echo "<input type=\"text\" name=\"codigo\" value=\"$codigo\"/>";
            ?>
        </p>
        <p>
            <label>Título:</label>
            <input type="text" name="titulo"/>
        </p>
        <p>
            <label>Gênero:</label>
            <input type="text" name="genero"/>
        </p>
        <p>
            <label>Classificação:</label>
            <input type="text" name="classi"/>
        </p>
        <p>
            <label>Quantidade em estoque:</label>
            <input type="text" name="quant"/>
        </p>
         <p>
            <label>Preço:</label>
            <input type="text" name="preco"/>
        </p>
        <p>
            <input type="submit" value="Cadastrar"/>
        </p>
    </fieldset>
</form>