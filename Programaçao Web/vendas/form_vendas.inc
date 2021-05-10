<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro de Produto</title>
</head>
<body>
	<article>
		<form action="form_cadastro_produto.php" method="POST">
			<fieldset>
				<legend> Venda de Produto</legend>
				<p>
					<label>Data da venda:</label>
						<input type="date" name="data"/>
				</p>
				<p> 
					<label> Cliente : </label>
						<select name="nomesCliente">
							<?php
								for($i = 0; $i < sizeof($_SESSION["nomesCliente"]); $i++)
								{
								echo "<option value=\"".$_SESSION["nomesCliente"][$i]."\">".$_SESSION["nomesCliente"][$i]."</option>";
								}
							?>
						</select>
					<label> Produto:</label>
						<select name="descricaoProduto">
							<?php
								for($i = 0; $i < sizeof($_SESSION["descricaoProduto"]); $i++)
								{
								echo "<option value=\"".$_SESSION["descricaoProduto"][$i]."\">".$_SESSION["descricaoProduto"][$i]."</option>";
								}
							?>
						</select>
				</p>
				<p>
					<label> quantidade de vendas: </label>
						<input type="number" name="qt"/>
				</p>
						
				<p><input type="submit" value="Cadastrar Produto"/></p>
			</fieldset>
		<form>
		<br>	<br>	<br>
	</article>
</body>
</html>