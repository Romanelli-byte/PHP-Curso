<form action="form_cadastra_livro.php" method="POST">
    <fieldset>
        <legend> Cadastro de livro</legend>
			<p>
				<label>Código:</label>
				<?php
					$codigo = ler_codigo();
					echo "<input type=\"text\" name=\"codigo\" value=\"$codigo\" readonly/>";
				?>
            </p> 
            <p>
                <label>Título:</label>
                <input type="text" name="titulo"/>
            </p> 
            <p>      
                <label>Autor:</label>
                <input type="text" name="autor"/>
            </p>
            <p>
                <label>Ano de publicação:</label>
                <input type="number" name="ano" step="1"/>
            </p>
			 <p>
                <label>Numero de páginas:</label>
                <input type="number" name="paginas" step="1"/>
            </p>
			 <p>
                <label>Editora:</label>
                <input type="text" name="editora"/>
            </p>
             <p>
				<input type="submit" value="cadastrar"/>
				<input type="reset" value="Limpar campos"/>
             </p>
    </fieldset>
</form>