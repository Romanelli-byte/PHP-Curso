<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Exercício 1 </title>
	<style>
		<?php
			if (isset($_COOKIE["cor"]))
			{
				$cor = $_COOKIE["cor"];
			}
			else
			{
				$cor = "white";
			}
			
			if (isset($_COOKIE["tamanho"]))
			{
				$tamanho = $_COOKIE["tamanho"]; //pode usar "small","larget","50px",etc.
			}
			else
			{
				$tamanho = "medium";
			}
			echo "body{background-color:$cor;}";
			echo "p{font-size:$tamanho; text-align: center;}";
		?>
	</style>
</head>
<body>
	<form method="POST" action="setup.php">
		<p>
			<label>Cor de fundo: </label>
			<input type="color" name="cor"/>
		</p>
		<p>
		<label>Tamanho da Fonte: </label>
			<input type="text" name="tamanho"/>
		</p>
        <p>
		<label>Cor da fonte: </label>
			<input type="text" name="corfontr"/>
		</p>
        <p>
		<label>Alinhamento do texto: </label>
			<input type="text" name="alinhamento"/>
		</p>
		<p>
			<input type="submit" value="Modificar Página"/>
		</p>
	</form>
</body>
<html>