<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Exercício 3</title>
</head>
<body>
	<form action="processa3.php" method="POST">
		<fieldset>
			<legend>Vetor U</legend>
				<?php
				for ($i=0; $i<10; $i++)
				{
					echo '<p>';
					echo 'valor'.$i.':<input type="number" step="0.01" name="valor[]"/>';
					echo '</p>';
				}
				?>
		</fieldset>
	<input type="submit" value="Enviar"/>
    </form>
</body>
</html>