<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Locação de Carros </title>
</head>
<body>
	<article>
		<form action="form_cadastro_consulta.php" method="POST">
			<fieldset>
				<legend>Agendamento</legend>
					<p>
						<label> Data da Consulta: </label>
							<input type="date" name="consulta"/>
					</p>
					<!-- <p> 
						<label> Psicólogo(a):</label>
							<select name="psicoPsico">
								<?php
									for($i = 0; $i < sizeof($_SESSION["psicoPsico"]); $i++)
									{
									echo "<option value=\"".$_SESSION["psicoPsico"][$i]."\">".$_SESSION["psicoPsico"][$i]."</option>";
									}
								?>
							</select>
					</p> -->
					<p>
						<label> Cliente : </label>
							<select name="clienteLocacao">
								<?php
									for($i = 0; $i < sizeof($_SESSION["nomesCliente"]); $i++)
									{
									echo "<option value=\"".$_SESSION["nomesCliente"][$i]."\">".$_SESSION["nomesCliente"][$i]."</option>";
									}
								?>
							</select>
					</p>
					<p>
						<label> Atendimento: </label>
							<input type="radio" name="aten" value="presencial" checked="checked"/> Presencial
							<input type="radio" name="aten" value="online"/> Online
					</p>
					
					<input type="submit" value="Agendar"/>
			</fieldset>
		</form>
		<br>	<br>	<br>
	</article>
</body>
</html>