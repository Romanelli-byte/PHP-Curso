<!DOCTYPE html>
<html lang = ”pt-BR” >
	<head>
		<title > Exibição no Browser </title >
	</head >
	<body>
			<?php
				$curso = "Técnico em Informática Integrado ao Ensino Médio";
				$ano = "2o";
				$disciplina = "IEB";
				$professor1 = "Fernando";
				$professor2 = "José Arnaldo";
				$frase1 = "Curso: $curso";
				$frase2 = "$ano ano - Disciplina: $disciplina";
				$frase3 = "Professores: $professor1 e $professor2";
				echo "<h1>$frase1</h1>";
				echo "<h2>$frase2</h2>";
				echo "<h3>$frase3</h3>";
			?>
	</body>
</html>