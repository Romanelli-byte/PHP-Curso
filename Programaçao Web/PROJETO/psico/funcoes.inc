<?php
	function ler_dados_cliente()
		{
			$_SESSION["nomesCliente"][] = $_POST["nome"];
			$_SESSION["emailCliente"][] = $_POST["email"];
			$_SESSION["enderecoCliente"][] = $_POST["endereco"];
			$_SESSION["telefoneCliente"][] = $_POST["tel"];
			$_SESSION["civilCliente"][] = $_POST["civil"];
			$_SESSION["rendaCliente"][] = $_POST["renda"];
			
			echo "<article>
					<div>
						<br>
						<h2>Cliente cadastrado com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
		}
///////////////////////////////////////////////////////////////////
	function listar_clientes()
	{
		if(isset($_SESSION["Cnome"]))
		{
			// algum cadastro ja foi feito
			echo "<table>";
				echo "<thead>";
					echo "<tr>
							<th>Nome</th>
							<th>Endereço</th>
							<th>Telefone</th>
							<th>E-mail</th>
							<th>CPF</th>
						  </tr>";
				echo "</thead>";
			echo "<tbody>";
				for( $i= 0; $i <sizeof($_SESSION["Cnome"]);$i++)
				{
					echo "<tr>
							<td>".$_SESSION["Cnome"][$i]."</td>
							<td>".$_SESSION["Cendereco"][$i]."</td>
							<td>".$_SESSION["Ctelefone"][$i]."</td>
							<td>".$_SESSION["Cemail"][$i]."</td>
							<td>".$_SESSION["Ccpf"][$i]."</td>
						  </tr>";
				}
			echo "</tbody>";
			echo "</table>";
		}
		else
		{
			//nenhum cadastro foi feito
			echo "<article>
					<h3>Não há clientes cadastrados.</h3>
				  </article>";
		}
	}
/////////////////////////////////////////////////////////
		function ler_dados_psico()
		{
			$_SESSION["psicoPsico"][] = $_POST["psico"];
			$_SESSION["crpPsico"][] = $_POST["crp"];
			$_SESSION["especialidadePsico"][] = $_POST["esp"];
			$_SESSION["tipoPsico"][] = $_POST["tipo"];
			$_SESSION["formaPsico"][] = $_POST["forma"];
			
			
		echo "<article>
						<div>
							<br>
							<h2>PsicÃ³logo cadastrado com sucesso.</h2>
						</div>
						<br><br><br><br>
					</article>";
		}
////////////////////////////////////////////////////////////////////
function listar_psico()
{
	if(isset($_SESSION["Cnome"]))
	{
		// algum cadastro ja foi feito
		echo "<table>";
			echo "<thead>";
				echo "<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th>E-mail</th>
						<th>CPF</th>
					  </tr>";
			echo "</thead>";
		echo "<tbody>";
			for( $i= 0; $i <sizeof($_SESSION["Cnome"]);$i++)
			{
				echo "<tr>
						<td>".$_SESSION["Cnome"][$i]."</td>
						<td>".$_SESSION["Cendereco"][$i]."</td>
						<td>".$_SESSION["Ctelefone"][$i]."</td>
						<td>".$_SESSION["Cemail"][$i]."</td>
						<td>".$_SESSION["Ccpf"][$i]."</td>
				      </tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
	else
	{
		//nenhum cadastro foi feito
		echo "<article>
				<h3>Não há clientes cadastrados.</h3>
			  </article>";
	}
}
////////////////////////////////////////////////////////////////////
	function ler_dados_consulta()
	{
		$_SESSION["atendimentoConsulta"][] = $_POST["aten"];
		
	
	echo "<article>
					<div>
						<br>
						<h2>Consulta agendada com sucesso.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
///////////////////////////////////////////////////////////////////////////
function listar_consulta()
{
	if(isset($_SESSION["Cnome"]))
	{
		// algum cadastro ja foi feito
		echo "<table>";
			echo "<thead>";
				echo "<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Telefone</th>
						<th>E-mail</th>
						<th>CPF</th>
					  </tr>";
			echo "</thead>";
		echo "<tbody>";
			for( $i= 0; $i <sizeof($_SESSION["Cnome"]);$i++)
			{
				echo "<tr>
						<td>".$_SESSION["Cnome"][$i]."</td>
						<td>".$_SESSION["Cendereco"][$i]."</td>
						<td>".$_SESSION["Ctelefone"][$i]."</td>
						<td>".$_SESSION["Cemail"][$i]."</td>
						<td>".$_SESSION["Ccpf"][$i]."</td>
				      </tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
	else
	{
		//nenhum cadastro foi feito
		echo "<article>
				<h3>Não há clientes cadastrados.</h3>
			  </article>";
	}
}
/////////////////////////////////////////////////////////////////////
function ler_dados_contato()
	{
		$_SESSION["emailContato"][] = $_POST["contato"];
		
	
	echo "<article>
					<div>
						<br>
						<h2>Contato enviado.</h2>
					</div>
					<br><br><br><br>
				</article>";
	}
?>