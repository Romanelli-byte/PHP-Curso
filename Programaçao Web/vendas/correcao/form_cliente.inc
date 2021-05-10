<article>
	<h3>Cadastro de novo Cliente</h3>
	<br>
	<form action="form_cadastro_cliente.php" method="POST">
		<p>
			<label>Nome:</label>
			<input type="text" name="nome"/>
		</p>
		<p>
			<label>Endereço: </label>
			<input type="text" name="endereco"/>
		</p>
		<p>
			<label>Telefone:</label>
			<input type="tel" name="telefone"/>
		</p>
		<p>
			<label>E-mail</label>
			<input type="email" name="email"/>
		</p>
		<p>
			<label>CPF:</label>
			<input type="text" name="cpf"/>
		</p>
		<p>
			<label></label>
			<input type="submit" name="Cadastrar cliente"/>
		</p>
	</form>
</article>