<form action="index.php" method="POST">
    <fieldset>
        <legend> Cadastro de livros</legend>
            <p>
                <label>Título:</label>
                <input type="text" name="titulo" />
            </p> 

            <p>      
                <label>Autor:</label>
                <input type="text" name="autor" />
            </p>

            <p>
                <label>Ano de publicação:</label>
                <input type="number" name="ano" />
            </p>
			
			 <p>
                <label>Numero de páginas:</label>
                <input type="number" name="pags" />
            </p>
			 <p>
                <label>Editora:</label>
                <input type="text" name="editora" />
            </p>
             <p>
				<input type="submit" value="cadastrar"/>
             </p>
    </fieldset>
</form>