<?php
	$nome_usuario = $_POST["nome_usuario"];
	$senha = $_POST["senha"];
	
	//nome de usuario errado
	if ($nome_usuario != "admin")
	{
		header("Location: erro_nome_usuario.html");
	}
	else 
	{
		//senha errada
		if ($senha != "123")
		{
			header("Location: erro_senha.html");
		}
		//nome de usuario e senha estão corretos
		else {
				setcookie("nome_usuario", $nome_usuario);
				setcookie("senha", $senha);
				header("Location: index.php");
		    }
	}
?>