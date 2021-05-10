<article>
	<h3>Cadastro de novo Produto</h3>
	<br>
	<form action="form_cadastro_produto.php" method="POST">
		<p>
			<label>Código:</label>
			<input type="text" name="codigo"/>
		</p>
		<p>
			<label>Descrição: </label>
			<input type="text" name="descricao"/>
		</p>
		<p>
			<label>Preço:</label>
			<input type="number"  step="0.01" name="preco"/>
		</p>
		<p>
			<label></label>
			<input type="submit" name="Cadastrar Produto"/>
		</p>
	</form>
</article>