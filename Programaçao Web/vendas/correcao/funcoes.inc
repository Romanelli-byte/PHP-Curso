<?php
///////// cadastra_cliente()
function cadastra_cliente()
{
	$_SESSION["Cnome"][] = $_POST["nome"];
	$_SESSION["Cendereco"][] = $_POST["endereco"];
	$_SESSION["Ctelefone"][] = $_POST["telefone"];
	$_SESSION["Cemail"][] = $_POST["email"];
	$_SESSION["Ccpf"][] = $_POST["cpf"];
	 
	 echo " <article>
	 <br>
	 <br>
	 <h3> O cliente foi cadastrado com sucesso.</h3>
	 </article>";
}
/////////////////////////
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
/////////////////////////////////////////////
function cadastra_produto()
{
	$_SESSION["Pcodigo"][] = $_POST["codigo"];
	$_SESSION["Pdescricao"][] = $_POST["descricao"];
	$_SESSION["Ppreco"][] = $_POST["preco"];
	 
	 echo " <article>
	 <br>
	 <br>
	 <h3> O produto foi cadastrado com sucesso.</h3>
	 </article>";
}
/////////
function listar_produtos()
{
	if(isset($_SESSION["Pcodigo"]))
	{
		// algum cadastro ja foi feito
		echo "<table>";
			echo "<thead>";
				echo "<tr>
						<th>Código</th>
						<th>Descrição</th>
						<th>Preço</th>
					  </tr>";
			echo "</thead>";
		echo "<tbody>";
			for( $i= 0; $i <sizeof($_SESSION["Pcodigo"]);$i++)
			{
				echo "<tr>
						<td>".$_SESSION["Pcodigo"][$i]."</td>
						<td>".$_SESSION["Pdescricao"][$i]."</td>
						<td>".$_SESSION["Ppreco"][$i]."</td>
						
				      </tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
	else
	{
		//nenhum cadastro foi feito
		echo "<article>
				<h3>Não há produtos cadastrados.</h3>
			  </article>";
	}
}
function cadastra_venda()
{
	$_SESSION["Vdata"][] = $_POST["data"];
	$_SESSION["Vcliente"][] = $_POST["cliente"];
	
	$indice = $_POST["produto"];
	$_SESSION["Vproduto"][] = $_SESSION["Pdescricao"][$indice];
	$_SESSION["Vquantidade"][] = $_POST["quantidade"];
	
	$preco_final = $_POST["quantidade"] *  $_SESSION["Ppreco"][$indice];
	$_SESSION["Vprecototal"][] = $preco_final;
	$preco_final = number_format($preco_final,2);
	 
	 echo " <article>
				 <br>
				 <br>
				 <h3> A venda foi registrada com sucesso.</h3>
			</article>";
}
/////////
function listar_vendas()
{
	if(isset($_SESSION["Vdata"]))
	{
		// algum cadastro ja foi feito
		echo "<table>";
			echo "<thead>";
				echo "<tr>
						<th>Data</th>
						<th>Cliente</th>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço Total</th>
					  </tr>";
			echo "</thead>";
		echo "<tbody>";
			for( $i= 0; $i <sizeof($_SESSION["Vdata"]);$i++)
			{
				echo "<tr>
						<td>".$_SESSION["Vdata"][$i]."</td>
						<td>".$_SESSION["Vcliente"][$i]."</td>
						<td>".$_SESSION["Vproduto"][$i]."</td>
						<td>".$_SESSION["Vquantidade"][$i]."</td>
						<td>".$_SESSION["Vprecototal"][$i]."</td>
						
				      </tr>";
			}
		echo "</tbody>";
		echo "</table>";
	}
	else
	{
		//nenhum cadastro foi feito
		echo "<article>
				<h3>Não há vendas registradas.</h3>
			  </article>";
	}
}
?>