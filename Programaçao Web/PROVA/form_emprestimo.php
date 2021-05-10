<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Empréstimo de Livros</title>
</head>
<body>
<form action="form_emprestimo.php" method="POST">
        <p> <a href="form_cadastro_leitores.php"> Cadastro de Leitores | </a> 
			<a href="form_cadastro_livros.php"> Cadastro  de  Livros   | </a> 
			<a href="form_emprestimo.php"> Empréstimo de Livros        | </a> 
			<a href="lista_leitores.php"> Listagem de Leitores         | </a>
			<a href="lista_livros.php"> Listagen de Livros             | </a> 
			<a href="lista_emprestimos.php"> Listagem de Empréstimos     </a>
		</p>
	<fieldset>
	<legend> Cadastrar empréstimo </legend>
       <?php 
			if (empty($_POST))
			{
				$_SESSION["cadastrou"] = false;
				echo "
				
			<select
			    <p> Nome Cadastrado <input type=\"text\" name=\"pesqnome\"/> </p>
			</select>
				<p>Data de Empréstimo : <input type=\"date\"  name=\"emprestimo\"/></p>
				<p>Data de Devolução : <input type=\"date\"  name=\"devolucao\"/></p>
				
				
				<input type=\"submit\" value=\"Cadastra emprestimo\"/>";
			}
				else
				{
					$pesqnome = $_SESSION["nomes"];
					$pesqlivro = $_SESSION["nlivro"];
					$emprestimo = $_SESSION["emprestimo"];
					$devolucao = $_SESSION["devolucao"];
					
					for ($i = 0; $i < sizeof ($_SESSION["nomes"]); $i++)
					{
						$nome = $_SESSION["nomes"][$i];
						if ($pesqnome == $nome)
						{
							echo " $pesqnome encontrada! <br/>";
							echo " Nome: $nome [$i] <br/>
								   Livro : $nlivro [$i] <br/>
								   Empréstimo: $emprestimo <br/>
								   Devolução : $devolucao ";
						}
						else
						{
							echo "$pesqnome não encontrada!";
						}
					}
				}
        ?>
    </fieldset>
</body>
</html>