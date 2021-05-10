<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 2</title>
</head>
<body>
    <form action="resultado.php" method="POST">
		<fieldset>
			<legend>Temperaturas dos meses do ano</legend>
				<p>Janeiro: <input type="number" step="1" name="temp[0]"/></p>
				<p>Fevereiro: <input type="number" step="1" name="temp[1]"/></p>
				<p>Março: <input type="number" step="1" name="temp[2]"/></p>
				<p>Abril: <input type="number" step="1" name="temp[3]"/></p>
				<p>Maio: <input type="number" step="1" name="temp[4]"/></p>
				<p>Junho: <input type="number" step="1" name="temp[5]"/></p>
				<p>Julho: <input type="number" step="1" name="temp[6]"/></p>
				<p>Agosto: <input type="number" step="1" name="temp[7]"/></p>
				<p>Setembro: <input type="number" step="1" name="temp[8]"/></p>
				<p>Outubro: <input type="number" step="1" name="temp[9]"/></p>
				<p>Novembro: <input type="number" step="1" name="temp[10]"/></p>
				<p>Dezembro: <input type="number" step="1" name="temp[11]"/></p>
		</fieldset>
		<p><input type="submit" value="Enviar"/></p>
    </form>
</body>
</html>