<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro de Cliente</title>
</head>
<body>
	<article>
		<form action="form_cadastro_cliente.php" method="POST">
			<fieldset>
				<legend> Cadastro de Cliente</legend>
				<p>
					<label>Nome:</label>
						<input type="text" name="nome" size="30"/>
					<label>E-mail</label>
						<input type="email" name="email" size="30"/>
				</p>
				<p>
					<label>Endereco:</label>
						<input type="text" name="endereco" size="27"/>
					<label>Telefone:</label>
						<input type="text" name="telefone" size="28"/>
				</p>
				<input type="submit" value="Cadastrar Cliente"/>
			</fieldset>
		<form>
		<br>	<br>	<br>
	</article>
</body>
</html>