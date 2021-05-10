<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Exercício2 </title>
</head>
<body>
	<form action="processa2.php" method="POST">
		<fieldset>
			<legend>Vetor R</legend>
				<?php
				for ($i=0; $i<3; $i++)
				{
					echo '<p>';
					echo 'valor'.$i.':<input type="number" step="0.01" name="valor_r[]"/>';
					echo '</p>';
				}
				?>
		</fieldset>
		<fieldset>
			<legend>Vetor S</legend>
				<?php
					for ($i=0; $i<7; $i++)
					{
						echo '<p>';
						echo 'valor'.$i.':<input type="number" step="0.01" name="valor_s[]"/>';
						echo '</p>';
					}
					?>
		</fieldset>
	<input type="submit" value="Enviar"/>
    </form>
</body>
</html>