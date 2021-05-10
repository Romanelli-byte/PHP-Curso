<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Listar Jogadores</title>
</head>
<body>
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
        
            echo "<table border=\"0\" width=\"10%\">
					<th>Nome do jogador</th>
					<th>Clube</th>
					<th>Posição</th>";

                for ($i = 0; $i < sizeof($_SESSION["nomes"]); $i++)
                {
                    echo "<tr>
                            <td>$nome[$i]</td>
                            <td>$clube[$i]</td>
                            <td>$posicao[$i]</td>
                          </tr>";
                }
            echo "</table>";      
        ?>
    </fieldset>
</body>
</html>