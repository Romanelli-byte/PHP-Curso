<article>
	<h3>Cadastro de novo Produto</h3>
	<br>
	<form action="form_venda_produto.php" method="POST">
		<p>
			<label>Data de Venda:</label>
			<input type="date" name="data"/>
		</p>
		<p>
			<label>Cliente: </label>
			<select name="cliente">
				<?php
				for ($i= 0 ; $i< sizeof($_SESSION["Cnome"]);$i++)
				{
					$nome =  $_SESSION["Cnome"][$i];
					echo "<option value=\"$nome\">$nome</option>";
				}
				?>
			</select>
		</p>
		<p>
			<label>Produto: </label>
			<select name="produto">
				<?php
				for ($i= 0 ; $i< sizeof($_SESSION["Pcodigo"]);$i++)
				{
					$desc = $_SESSION["Pdescricao"][$i];
					echo "<option value=\"$i\">$desc</option>";
				}
				?>
			</select>
		</p>
			<label>	Quantidade:</label>
			<input type="number" name="quantidade"/>
		<p>
			<label></label>
			<input type="submit" name="Cadastrar Produto"/>
		</p>
	</form>
</article>