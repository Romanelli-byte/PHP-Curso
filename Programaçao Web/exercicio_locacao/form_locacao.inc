<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Locação de Carros </title>
</head>
<body>
	<article>
		<form action="form_locacao_carros.php" method="POST">
		<fieldset>
			<legend>Locação de Carros</legend>
				<p>
					<label> Data da Locação: </label>
						<input type="date" name="locacao" size="32"/>
				</p>
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
					<label> Carro:</label>
						<select name="carroLocacao">
							<?php
							for($i = 0; $i < sizeof($_SESSION["marcaCarro"]); $i++)
							{
							echo "<option value=\"".$_SESSION["marcaCarro"][$i]."\">".$_SESSION["marcaCarro"][$i]."</option>";
							}
							?>
						</select>
				</p>
				<p>
					<label> quantidade de diárias: </label>
						<input type="number" name="diaria"/>
				</p>
				<input type="submit" value="Cadastrar Locação"/>
			</fieldset>
		</form>
		<br>	<br>	<br>
	</article>
</body>
</html>