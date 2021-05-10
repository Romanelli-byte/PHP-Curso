 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
	<meta charset ="utf-8"/>
	<title>Pesquisa</title>
</head>
<body>
	<?php
		$av = $_POST["avaliacao"];
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$fone = $_POST["fone"];
		$nov = $_POST["novidades"];
		$secao = $_POST["secao"];
		$comentario = $_POST["comentarios"];
		
		echo "$av <br>" ;
		echo "$nome <br>";
		echo "$email <br>";
		echo "$fone <br>";
		echo "$nov <br>";
		echo "$secao <br>";
		echo "$comentario";
		
	?>
</body>
</html>