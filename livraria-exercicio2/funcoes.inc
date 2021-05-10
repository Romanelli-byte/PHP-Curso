<?php
  function form_livros(){
	  
	   //receber os dados no formulário
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $ano = $_POST["ano"];
		$pags = $_POST["pags"];
        $editora = $_POST["editora"];

        //abrir o arquivo so para escrita, e coloca o ponteiro no final 
        $arq = fopen("livros.txt", "a");

        //escrever dados no arquivo
        fwrite($arq, "$titulo\n");
		fwrite($arq, "$autor\n");
        fwrite($arq, "$ano\n");
        fwrite($arq, "$pags\n");
		fwrite($arq, "$editora\n");

        //fechar o arquivo
		fclose($arq);

        //mensagem de sucesso
        echo"<h2>Livro cadastrado com sucesso!</h2>";
	
	
 }
 /////////////////////////////////////////////
function dados_livros()
{
	//verifica se o arquivo existe
	if(file_exists("livros.txt"))
	{
		//abre o arquivo para leitura
		$arq = fopen("livros.txt", "r");

		//gera a  tabela com os dados
		echo"<table�border=\"1\">";
		echo"<thead>�			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Ano</th>
				<th>Número de paginas</th>
				<th>Editora</th>
			</tr>
			</thead>";
			echo"<tbody>";
				while(!feof($arq))
				{
					$titulo = fgets($arq);  // le a linha titulo
					$autor = fgets($arq);  // le a linha do autor
					$ano = fgets($arq); // le a linha do ano de publicaçao
					$pags = fgets($arq); // le a linha do numero de paginas
					$editora = fgets($arq); // le a linha da editora

					if(!empty($titulo))
					{ 
						// evita imprimir linha vazia na tabela devido o \n
						echo"
							 <tr>	
								<td>$titulo</td>
								<td>$autor</td>
								<td>$ano</td>
								<td>$pags</td>
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
		echo"NENHUM LIVRO CADASTRADO";
	}
}
?>