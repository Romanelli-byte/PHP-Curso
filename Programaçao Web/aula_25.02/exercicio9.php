<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Fechamento de notas -Formulário de Notas</title>
	</head>
	<body>
		<form action="processa_notas.php" method="POST">
		<?php
			$espec = $_POST["espec"];
			for ($i=1; $i <= $espec; $i++)
			{
				echo "<fieldset>
						<legend>Espectador:.$i </legend>
					<p>
						<label>Idade:</label>
						<input type=\"number\" name=\"idade\" min=\"1\" step=\"1\"/>
					</p>
					<p>
						<label>Opinião:</label>
						<p><input type=\"radio\" name=\"3\" value=\"otimo\"/>Otimo</p>
						<p><input type=\"radio\" name=\"2\" value=\"bom\"/>Bom</p>
						<p><input type=\"radio\" name=\"1\" value=\"regular\"/>Regular</p>
					</fieldset>";	
			}					
		?>
			<input type="submit" value="Enviar"/>
			<input type="reset" value="Limpar"/>

		</form>
	</body>
</html>