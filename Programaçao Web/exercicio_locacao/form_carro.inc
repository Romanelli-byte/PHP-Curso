<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Cadsatro de Carro</title>
</head>
<body>
	<article>
		<form action="form_cadastro_carro.php" method="POST">
			<fieldset>
				<legend> Cadastro de Carro</legend>
				<p>
					<label> Marca: </label>
						<input type="text" name="marca" size="30"/>
					<label> Modelo: </label>
						<input type="text" name="modelo" size="30"/>
				</p>
				<p>
					<label> Ano: </label>
						<input type="text" name="ano" size="32"/>
					<label> Placa: </label>
						<input type="text" name="placa"size="32" />
				</p>
				<p>
					<label> Valor da Diária: </label>
						<input type="text" name="valor" size="22"/>
				</p>
				<input type="submit" value="Cadastrar Carro"/>
			</fieldset>
		<form>
		<br>	<br>	<br>
	</article>
</body>
</html>