<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Locação de Carros </title>
</head>
<body>
	<article>
		<form action="form_cadastro_contato.php" method="POST">
			<fieldset style="width:555px">
				<legend>DADOS PESSOAIS</legend>
				<center>
					<p>Nome: <input type="text" name="primeiro_nome" size="30"/></p>
					<p>Data de Nascimento:<input type="date" name="data"/></p>
					<p>Sexo:
						<input type="radio" name="sexo" value="m" /> Masculino
						<input type="radio" name="sexo" value="f"/> Feminino
					</p>
					</center>
			</fieldset>
			<fieldset style="width:555px">
				<legend>NOTIFICAÇÕES</legend>
			<center>
					<p>Email: <input id="email" name="contato" size="49"/></p>
					<p>Telefone: <input type="tel" name="celular" size="50"/></p>
					<center>
					<p>Receber notificações?
						<input type="radio" name="escolha" value="s"/>Sim
						<input type="radio" name="escolha" value="n"/>Não
					</p>
					<p>Deixe aqui sua mensagem:<br>
						<textarea name="mensagem" cols="58" rows="15"></textarea>
					</p>	
					<p>Envie um arquivo: 
						<input type="file" name="arquivo"/>
					</p>
				
				<input type="submit" value="Enviar"/>
				<button type="reset"> Limpar
				</center>
			</fieldset>
		</form>
		<br>	<br>	<br>
	</article>
</body>
</html>