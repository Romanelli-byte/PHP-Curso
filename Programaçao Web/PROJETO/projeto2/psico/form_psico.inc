<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Cadsatro de Carro</title>
</head>
<body>
	<article>
		<form action="form_cadastro_psico.php" method="POST">
			<fieldset>
				<legend> Cadastro de psicólogos(as)</legend>
				<p>
					<label>Nome: </label>
						<input type="text" name="psico" size="30"/>
					<label> CRP: </label>
						<input type="number" name="crp"  />
				</p>
				<p>
					<label> Forma de atendimento: </label> 
							<input type="radio" name="forma" value="PreOn" checked="checked" /> Presencial e Online 
							<input type="radio" name="forma" value="presencial"/> Presencial
							<input type="radio" name="forma" value="online"/> Online		
				</p>
				<p>
					<label>Especialidade(s): </label>
						<input type="text" name="esp" size="51"/>
				</p>
				<p>
					<label> Tipo de Abordagem: </label>
						<input type="text" name="tipo" size="47"/>
				</p>
				<input type="submit" value="Cadastrar"/>
			</fieldset>
		<form>
		<br>	<br>	<br>
	</article>
</body>
</html>