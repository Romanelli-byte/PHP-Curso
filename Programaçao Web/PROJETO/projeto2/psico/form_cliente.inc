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
					<label>Nome Completo:</label>
						<input type="text" name="nome" size="30"/>
				</p>
				<p>
					<label>Telefone:</label>
						<input type="text" name="tel" size="28"/>
				</p>
				<p>
					<label>E-mail</label>
						<input type="email" name="email" size="30"/>
				</p>
				<p>
					<label>Endereço:</label>
						<input type="text" name="endereco" size="27"/>
				</p>
				<p>
				<label>Estado Civil:</label>
					<select name="civil">
					<option>Casado(a)</option>
					<option>viúvo(s)</option>
					<option>solteiro(s)</option>
					<option>Divorciado(a)</option>
					</select>
				</p>
				<p>
				<label>Renda Mensal:</label>
				<input type="number" name="renda"/>
				</p>
				<input type="submit" value="Cadastrar"/>
			</fieldset>
		<form>
		<br>	<br>	<br>
	</article>
</body>
</html>