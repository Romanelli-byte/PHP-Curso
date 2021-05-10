<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Escalar Jogadores</title>
</head>
<body>
		<form action="escalar_jogadores.php" method="POST">
        <p> <a href="cadastra_jogador.php">Cadastrar jogador  | </a> 
			<a href="listar_jogadores.php">Listar jogadores   | </a> 
			<a href="escalar_jogadores.php">Escalar jogadores | </a> 
			<a href="listar_escalados.php">Listar escalados     </a>
		</p>
		
		<h2>Lista de jogadores cadastrados</h2>
	<fieldset>
       <?php 
            $nome = $_SESSION["nomes"];
            $clube = $_SESSION["clubes"];
            $posicao = $_SESSION["posicao"];
			if (!isset($_SESSION["escalar"]))
				$_SESSION["escalar"] = 0;
			
		if (empty($_POST))
        {
			echo "<table border=\"0\" width=\"15%\">
						<th>Nome do jogador</th>
						<th>Clube</th>
						<th>Posição</th>";
			for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
			{
				echo "<tr>
						<td><input type=\"radio\" name=\"escalar\" value=\"$nome[$i]\"/>$nome[$i]</td>
						<td>$clube[$i]</td>
						<td>$posicao[$i]</td>
					  </tr>";
			}
			echo "</table>";
			
			if ($_SESSION["escalar"] < 10)
			{
					echo "<input type=\"submit\" value=\"Escalar jogador\"/>";  
			}	
			else 
				{
					echo "<h2> Você atingiu o limite de 11 jogadores!";
					echo "<input type=\"submit\" value=\"Escalar jogador\" disabled/>";  
				}
		}		
			 else 
				{
					$_SESSION["escalar"]++;
					echo "<h2>Jogador  $_POST[escalar] Escalado !</h2>";
				} 
        ?>
    </fieldset>
</body>
</html>