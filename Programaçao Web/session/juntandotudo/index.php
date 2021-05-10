<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Juntando Tudo</title>
</head>
<body>
	<?php
	//se o formulario esta vazio (nada foi submetido a pagina)
	if(empty($_POST))
	{
		$_SESSION["cadastrou"] = false;
		
			echo "<form action=\"index.php\" method=\"POST\">
					<fieldset>
						<legend>Cadastro de produtos</legend>
						<p>
							<label>Nome:</label>
							<input type=\"text\" name=\"nome\" size=\"30\" required/>
						</p>
						<p>
							<label>Preço:</label>
							<input type=\"numer\" step=\"0.01\" name=\"preco\" required/>
						</p>
						<input type=\"submit\" value=\"cadastrar\"/>	
					</fieldset>
					</form>
					<a href=\"lista_produto.php\">Listar Produtos</a>";
	}
	//se o formulario esta cheio (foi suibmetido a pagina)
	else
	{
		if ($_SESSION["cadastrou"] == false) // falso
		{   //evita que o mesmo produto seja registrado 2 vezes
			//armazena dados do formulario na matriz $_SESSION
			$_SESSION["nomes"][] = $_POST["nome"]; // atribuir dados
			$_SESSION["precos"][] = $_POST["preco"];
			echo "<h2>Produto cadastrado com sucesso! </h2>";
			$_SESSION["cadastrou"] = true; //verdadeiro
		}
		else
		{
			echo "<h2>Produto ja foi cadastrado</h2>";
		}
		
		echo "<p>
				<a href=\"index.php\">Voltar</a>
			 </p>";
	}
	?>
</body>
</html>
