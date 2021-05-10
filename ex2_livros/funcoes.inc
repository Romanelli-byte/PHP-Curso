<?php
function ler_codigo()
	{
	  if (!file_exists("codigo_livro.txt"))
	  {
		$arq =  fopen("codigo_livro.txt","w");
		
		//escreve no arquivo o primeiro codigo
		$codigo = 1;
		fwrite($arq,$codigo);
		fclose($arq);  
	  }
	  else
	  {
		  $arq = fopen("codigo_livro.txt","r");
		  $codigo = fgets($arq);
		  fclose($arq);
	  }
		return $codigo;
	}
/////////////////////////////////////////////
function atualizar_codigo($cod)
	{
		$cod++;
		$arq =  fopen("codigo_livro.txt","w");
		fwrite($arq,$cod);
		fclose($arq);  
	}
/////////////////////////////////////////////
function cadastra_livros()
	{
		//receber os dados no formulário
		$codigo = $_POST["codigo"];
		$autor = $_POST["autor"];
		$titulo = $_POST["titulo"];
		$ano = $_POST["ano"];
		$paginas = $_POST["paginas"];
		$editora = $_POST["editora"];

		$arq = fopen("cadastro_livros.txt", "a");

		fwrite($arq, "$codigo\n");
		fwrite($arq, "$autor\n");
		fwrite($arq, "$titulo\n");
		fwrite($arq, "$ano\n");
		fwrite($arq, "$paginas\n");
		fwrite($arq, "$editora\n");

		fclose($arq);

		atualizar_codigo($codigo);
	}
 /////////////////////////////////////////////
function listar_livros()
	{
		//verifica se o arquivo  de livros existe
		if(file_exists("cadastro_livros.txt"))
		{
			//abre o arquivo para leitura
			$arq = fopen("cadastro_livros.txt", "r");

			//gera a  tabela com os dados
			echo"<table border=\"1\">";
			echo"<thead>
					<tr>
						<th>Código</th>
						<th>Autor</th>
						<th>Título</th>
						<th>Ano</th>
						<th>Nº de paginas</th>
						<th>Editora</th>
					</tr>
				</thead>";
			echo"<tbody>";
					while(!feof($arq))
					{
						$codigo = fgets($arq);  // le a linha 
						$autor = fgets($arq);  				
						$titulo = fgets($arq);					
						$ano = fgets($arq); 
						$paginas = fgets($arq); 
						$editora = fgets($arq); 

						if(!empty($titulo))
						{ 
							// evita imprimir linha vazia na tabela devido o \n
							echo"
								 <tr>	
									<td>$codigo</td>
									<td>$autor</td>
									<td>$titulo</td>
									<td>$ano</td>
									<td>$paginas</td>
									<td>$editora</td>
								</tr>";
						}
					}
			echo"</tbody>";
			echo"</table>";
			fclose($arq);
		}
		else
		{
			echo"Não há livros cadastrados";
		}
	}
/////////////////////////////////////////////////////////////
function busca_livro()	
{
	if (file_exists("cadastro_livros.txt"))
	{
		$arq = fopen("cadastro_livros.txt", "r");
		
		echo"<table border=\"1\">";
			echo"<thead>
					<tr>
						<th>Código</th>
						<th>Autor</th>
						<th>Título</th>
						<th>Ano</th>
						<th>Nº de paginas</th>
						<th>Editora</th>
					</tr>
				</thead>";
			echo"<tbody>";
				$achou = false;
				
				$t = $_POST["busca"];
				while(!feof($arq))
				{
					$codigo = fgets($arq);  // le a linha 
					$autor = fgets($arq);  				
					$titulo = fgets($arq);					
					$ano = fgets($arq); 
					$paginas = fgets($arq); 
					$editora = fgets($arq); 
					
					//identifica que chegou ao fim do arquivo (linha vazia)
					if(empty($codigo)) break;

					//retira o \n do fim da string
					$titulo = chop($titulo);
					
					if($titulo == $t)
					{ 
						$achou = true;
						echo "<tr>	
								<td>$codigo</td>
								<td>$autor</td>
								<td>$titulo</td>
								<td>$ano</td>
								<td>$paginas</td>
								<td>$editora</td>
							</tr>";
					}
				}
				if (!$achou)
				{
					echo "<tr>	
							<td colspan=\"6\">Nenhum livro encontrado!</td>
						</tr>";
				}
			echo"</tbody>";
		echo"</table>";
	}
	else
	{
		echo "Não há livros cadastrados";
	}
}
?>