<?php

function cadastra_agenda()
{
	//receber os dados do formulario
	$nome = $_POST["nome"];
	$tel = $_POST["telefone"];
	$email = $_POST["email"];

	//abrir o arquivo
	$arq = fopen("agenda.txt","a");
	
	// escrever os dados no arquivo
	fwrite ($arq, "$nome\n");
	fwrite ($arq, "$tel\n");
	fwrite ($arq, "$email\n");

	//fecha arquivo
	fclose($arq);
	
	//mensagem e sucesso
	echo "<h2>Cliente cadastrado com sucesso! </h2>";
}
function lista_agenda(){
	 
	// verifica se o arquivo  de agenda existe
	if (file_exists("agenda.txt")){

		// abrir arquvo para leitura
		$arq = fopen("agenda.txt","r");

		echo "<table border=\"1\">";
		echo "<tread>
				<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>E-mail</th>
				</tr>
			</tread>";
		echo "<tbody>";

		// enquanto não chegar no fim do arquivo
		while(!feof($arq)){
			$nome = fgets($arq); // le a linha nome

			// evita emprimir linha vazia na tabela, devido ao \n
			if (empty($nome)) break;


			$tel = fgets($arq); // le a linha telefone
			$email = fgets($arq); // le a linha email

			echo "<tr>
					<td>$nome</td>
					<td>$tel</td>
					<td>$email</td>
				</tr>";

		}

		echo "</tbody>";
		echo "</table>";
	}
	else{
		echo "<h2>Ninguém foi cadastrado.</h2>";
	}
}
function busca_agenda(){

	if (file_exists("agenda.txt")){

		// abro o arquivo para leitura
		$arq = fopen("agenda.txt", "r");

		$nome_buscado = $_POST["nome"];
		while(!feof($arq)){

			$nome = fgets($arq);
			$nome = chop($nome);
			$tel = fgets($arq);
			$tel = chop($tel);
			$email = fgets($arq);
			$email = chop($email);
			
			if($nome_buscado == $nome){
				echo "Nome: $nome<br/>";
				echo "Telefone: $tel<br/>";
				echo "E-mail: $email<br/>";

			}
		}
		fclose($arq);
	}
	else{
		echo "<h2>A agenda está vazia!</h2>";
	}
}
?>