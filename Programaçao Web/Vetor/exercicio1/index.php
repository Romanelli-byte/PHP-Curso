<!--Exercício 1 . Faça um formulário HTML para ler os elementos de um array (vetor) com 10
valores reais, enviar os elementos lidos para um programa em PHP que encontra e mostra o
maior e o menor valor armazenado no array.-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Exercício 1 - Arrays</title>
</head>
<body>
	<form action="processa.php" method="POST">
		<fieldset>
			<legend> 10 valores reais</legend>
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