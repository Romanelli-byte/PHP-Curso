<?php session_start();?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro de jogadores</title>
</head>
<body>
	<form action="cadastra_jogador.php" method="POST">
        <p> <a href="cadastra_jogador.php">Cadastrar jogador  | </a> 
			<a href="listar_jogadores.php">Listar jogadores   | </a> 
			<a href="escalar_jogadores.php">Escalar jogadores | </a> 
			<a href="listar_escalados.php">Listar escalados     </a>
		</p>
	<fieldset>
        <legend>Cadastrar jogador</legend>
		 <?php 
        if (empty($_POST))
        {
            echo "
            <p>Nome: <input type=\"text\" size=\"30\" name=\"nome\"/></p>
            <p>Clube: <input type=\"text\" size=\"30\" name=\"clube\"/></p>
            <p>Posição:
				<select name=\"posicao\">
					<option value=\"goleiro\">Goleiro</option>
					<option value=\"zagueiro\" >Zagueiro</option>
					<option value=\"lateral\">Lateral</option>
					<option value=\"meio\">Meio de campo</option>
					<option value=\"atacante\">Atacante</option>
				</select>
			</p>
            <input type=\"submit\" value=\"Cadastrar jogador\"/>";
        }
        else 
		{
            $_SESSION["nomes"][]= $_POST["nome"];
            $_SESSION["clubes"][]= $_POST["clube"];
            $_SESSION["posicao"][]= $_POST["posicao"];
     
            echo "<h2>Jogador  $_POST[nome] cadastrado com sucesso.</h2>";
        }
        ?>
		
    </fieldset>
</body>
</html>