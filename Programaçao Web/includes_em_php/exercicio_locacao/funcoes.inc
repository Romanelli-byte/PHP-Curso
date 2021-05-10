<?php
	function ler_dados_cliente()
		{
			$_SESSION["nomesCliente"][] = $_POST["nome"];
			$_SESSION["emailCliente"][] = $_POST["email"];
			$_SESSION["enderecoCliente"][] = $_POST["endereco"];
			$_SESSION["telefoneCliente"][] = $_POST["telefone"];
			
			echo "<article>
					<div>
						<br>
						<h2>Cliente cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
		}
		
	function ler_dados_carro()
	{
		$_SESSION["marcaCarro"][] = $_POST["marca"];
		$_SESSION["modeloCarro"][] = $_POST["modelo"];
		$_SESSION["anoCarro"][] = $_POST["ano"];
		$_SESSION["placaCarro"][] = $_POST["placa"];
		$_SESSION["valorCarro"][] = $_POST["valor"];
		
	echo "<article>
					<div>
						<br>
						<h2>Carro cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
	function ler_dados_locacao()
	{
		$_SESSION["dataLocacao"][] = $_POST["locacao"];
		$_SESSION["clienteLocacao"][] = $_POST["clienteLocacao"];
		$_SESSION["carroLocacao"][] = $_POST["carroLocacao"];
		$_SESSION["diariaLocacao"][] = $_POST["diaria"];
	
	echo "<article>
					<div>
						<br>
						<h2>Locação cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
?>