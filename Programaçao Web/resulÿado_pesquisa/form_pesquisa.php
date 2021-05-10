<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Formulário - Exercício 9 </title>
</head>
<body>
	<form action="resultado.php" method="POST">
		<?php
			$npessoas = $_POST["npessoas"];
			
			for($i = 1; $i <= $npessoas; $i++)
			{
		?>
			<fieldset>
				<legend>Espectador <?php echo $i ?> </legend>
				<p>
					Idade: <input type="number" step="1" <?php  echo "name=\"idade$i\"";?> />
				</p>
				<p>
					Opinião:
					<select <?php  echo "name=\"opiniao$i\"";?>>
						<option value="3">ótimo</option>
						<option value="2">Bom</option>
						<option value="1">Regular</option>
					</select>
				</p>		
			</fieldset>
		<?php
			}
		?>
		<input type="hidden" name="npessoas" <?php echo "value=\"$npessoas\"";?>/>
		
		<input type="submit" value="Submeter pesquisa"/>
		<input type="reset" value="Limpar pesquisa"/>
	</form>
</body>
<html>