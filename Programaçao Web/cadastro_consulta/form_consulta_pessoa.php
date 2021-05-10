<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>
<?php,
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
							<input type=\"text\" name=\"pesquisa\" size=\"33\" required/>
					<input type=\"submit\" value=\"Pesquisar\"/>		
					</fieldset>
					</form>";		
	}
	else
	{
		$pesq = $_SESSION["pesquisa"];
		$tel = $_SESSION["telefones"];
		$end = $_SESSION["enderecos"];
		
		for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
		{
			$nome = $_SESSION["nomes"][$i];
			if ($pesquisa == $nome)
			{
				echo " $pesquisa encontrada! <br/>";
				echo " Nome: $nome [$i] <br/>
					   Telefone: $telefones[$i] <br/>
					   Endereço: $enderecos [$i]";
			}
			else
			{
				echo "$pesquisa não encontrada!";
			}
			
		}
	}	
?>
</body>
</html>
