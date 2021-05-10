<form action="form_cadastro_tarefa.php" method="POST">
    <fieldset>
        <p>
            <label>Código:</label>
            <?php
                $codigo = pegaCodigoTarefa();
                echo "<input type=\"text\" name=\"codigo\" value=\"$codigo\"/>";
            ?>
        </p>
        <p>
            <label>Nome da Tarefa:</label>
            <input type="text" name="nome"/>
        </p>
        <p>
            <label>Data da Tarefa:</label>
            <input type="date" name="data"/>
        </p>
  
        <p>
            <input type="submit" value="Cadastrar"/>
        </p>
    </fieldset>
</form>