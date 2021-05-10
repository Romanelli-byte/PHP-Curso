 <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
<?php
	if(empty($_POST))
	{
		$_SESSION["cadastrou"] = false;
		
			echo "<form action=\"form_cadastro_pessoa.php\" method=\"POST\">
					<fieldset>
							<a href=\"form_cadastro_pessoa.php\">Cadastrar Pessoas | </a>
							<a href=\"lista_pessoas.php\">Listar Pessoas | </a>
							<a href=\"form_consulta_pessoa.php\">Consultar Pessoa</a>
						<p>
							<label>Nome:</label>
							<input type=\"text\" name=\"nome\" size=\"33\" required/>
				
							<label>Telefone:</label>
							<input type=\"numer\" step=\"0.01\" name=\"tel\" size=\"15\" required/>
						</p>
						<p>
							<label>Endereço:</label>
							<input type=\"text\" name=\"end\" size=\"30\" required/>
						</p>
					<input type=\"submit\" value=\"Enviar\"/>		
					</fieldset>
					</form>";		
	}
	else
	{
		if ($_SESSION["cadastrou"] == false) 
		{   
			$_SESSION["nomes"][] = $_POST["nome"];
			$_SESSION["telefones"][] = $_POST["tel"];
			$_SESSION["enderecos"][] = $_POST["end"];
			echo "<fieldset>";
			echo "	<a href=\"form_cadastro_pessoa.php\">Cadastrar Pessoas | </a>
					<a href=\"lista_pessoas.php\">Listar Pessoas | </a>
					<a href=\"form_consulta_pessoa.php\">Consultar Pessoa</a>";
			echo "<h2>Pessoa cadastrada com sucesso!</h2>";
			echo "</fieldset>";
			$_SESSION["cadastrou"] = true;
		}
		else
		{
			echo "<fieldset>";
			echo "	<a href=\"form_cadastro_pessoa.php\">Cadastrar Pessoas | </a>
					<a href=\"lista_pessoas.php\">Listar Pessoas | </a>
					<a href=\"form_consulta_pessoa.php\">Consultar Pessoa</a>";
			echo "<h2>Pessoa já cadastrada ! </h2>";
			echo "</fieldset>";
		}
		
		echo "<p>
				<a href=\"form_cadastro_pessoa.php\">Voltar</a>
			 </p>";
	}
?>
</body>
</html>
