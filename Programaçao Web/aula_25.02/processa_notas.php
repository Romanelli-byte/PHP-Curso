<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Fechamento de Notas - Resultado </title>
	</head>
	<body>
		<table border="1">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Prova</th>
					<th>Trabalho</th>
					<th>Exercícios</th>
					<th>Média</th>
					<th>Situação</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$quantidadeAlunos = $_POST["quantidadeAlunos"];
					$mediaTurma = 0 ;
					for ( $i = 1 ; $i <= $quantidadeAlunos ; $i++)
					{
						$nome = $_POST["nome$i"];
						$prova = $_POST["prova$i"];
						$trabalho = $_POST["trabalho$i"];
						$exercicio = $_POST["exercicio$i"];
						$media = ($prova + $trabalho + $exercicio) / 3 ;
						if ( $media < 4)
						{
							$situacao = "Reprovado";
						} 
						elseif ($media < 6)
						{
							$situacao = "Reavaliação";
						} 
						else 
						{
							$situacao = "Aprovado";
						}
						$mediaTurma += $media ;
						echo '<tr>
								<td>' . $nome . '</td>
								<td>' . number_format($prova ,1) . '</td>
								<td>' . number_format($trabalho ,1) . '</td>
								<td>' . number_format($exercicio ,1) . '</td>
								<td>' . number_format($media ,1) . '</td>
								<td>' . $situacao . '</td>
							</tr>' ;
					}
				?>
			</tbody >
	<tfoot>
		<tr>
			<td colspan = "5" > Média da turma </td>
			<td>
			<?php
				$mediaTurma /= $quantidadeAlunos ;
				echo number_format ($mediaTurma , 1 );
			?>
			</td >
		</tr >
	</tfoot >
		</table >
	</body >
</html >