<article>
	<form action="form_cadastro_consulta.php" method="POST">
		<fieldset>
			<legend>Agendamento</legend>
				
					<label> Data da Consulta: </label>
						<input type="date" name="consulta"/>
				
				<!-- <p> 
					<label> Psicólogo(a):</label>
						<select name="psicoPsico">
							<?php
								for($i = 0; $i < sizeof($_SESSION["psicoPsico"]); $i++)
								{
								echo "<option value=\"".$_SESSION["psicoPsico"][$i]."\">".$_SESSION["psicoPsico"][$i]."</option>";
								}
							?>
						</select>
				</p> -->
			<br>
					<label> Cliente : </label>
						<select name="clienteLocacao">
							<?php
								for($i = 0; $i < sizeof($_SESSION["nomesCliente"]); $i++)
								{
								echo "<option value=\"".$_SESSION["nomesCliente"][$i]."\">".$_SESSION["nomesCliente"][$i]."</option>";
								}
							?>
						</select>
			<br>
			
					<label> Atendimento: </label>
						<input type="radio" name="aten" value="presencial" checked="checked"/> Presencial
						<input type="radio" name="aten" value="online"/> Online
			
					<label> Preferência: </label>
						<input type="radio" name="pref" value="individual" checked="checked"/> Individual
						<input type="radio" name="pref" value="grupo"/> Grupo
			
				<p><input type="submit" value="Agendar"/></p>
		</fieldset>
	</form>
</article>