<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Fechamento de notas -Formulário de Notas</title>
	</head>
	<body>
		<form action="processa_notas.php" method="POST">
		<?php
			$quantidadeAlunos = $_POST["quantidadeAlunos"];
			for ($i=1; $i <= $quantidadeAlunos; $i++)
			{
				echo '<fieldset>
						<legend>Dados do aluno'.$i . '</legend>
					<p>
						<label>Nome:</label>
						<input type="text" name="nome' . $i . '"/>
					</p>
					<p>
						<label>Prova:</label>
						<input type"number" name ="prova' . $i . '" min="0" max="10" step"0.1"/>
						<label>Trabalho:</label>
						<input type"number" name ="trabalho' . $i . '" min="0" max="10" step"0.1"/>
					<label>Exercícios de Fixação::</label>
						<input type"number" name ="exercicio' . $i . '" min="0" max="10" step"0.1"/>
					</p>
					</fieldset>';		
			}
			echo '<input type="hidden" name="quantidadeAlunos" value ="' . $quantidadeAlunos .'"/>';
			?>
			<input type="submit" value="Enviar"/>
			<input type="reset" value="Limpar"/>
		</form>
	</body>
</html>