<?php
	function ler_dados_cliente()
		{
			$_SESSION["nomesCliente"][] = $_POST["nome"];
			$_SESSION["enderecoCliente"][] = $_POST["endereco"];
			$_SESSION["telefoneCliente"][] = $_POST["telefone"];
			$_SESSION["emailCliente"][] = $_POST["email"];
			$_SESSION["cpfCliente"][] = $_POST["cpf"];
			
			echo "<article>
					<div>
						<br>
						<h2>Cliente cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
		}
		
	function ler_dados_produto()
	{
		$_SESSION["codigoProduto"][] = $_POST["cod"];
		$_SESSION["descricaoProduto"][] = $_POST["des"];
		$_SESSION["precoProduto"][] = $_POST["preco"];
		
		
	echo "<article>
					<div>
						<br>
						<h2>Produto cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
	function ler_dados_venda()
	{
		$_SESSION["dataVenda"][] = $_POST["data"];
		$_SESSION["quantidadeVenda"][] = $_POST["qt"];
		
	
	echo "<article>
					<div>
						<br>
						<h2> Venda cadastrada com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
?>