
			<fieldset style="width:555px">
				<legend>DADOS PESSOAIS</legend>
				<center>
					<p>Nome: <input type="text" name="primeiro_nome" size="30"/></p>
					<p>Data de Nascimento:<input type="date" name="data"/></p>
					<p>Sexo:
						<input type="radio" name="sexo" value="m" /> Masculino
						<input type="radio" name="sexo" value="f"/> Feminino
					</p>
					</center>
			</fieldset>
			<fieldset style="width:555px">
				<legend>NOTIFICAÇÕES</legend>
			<center>
					<p>Email: <input id="email" name="email" size="49"/></p>
					<p>Telefone: <input type="number" name="celular" size="100"/></p>
					<center>
					<p>Receber notificações?
						<input type="radio" name="escolha" value="s"/>Sim
						<input type="radio" name="escolha" value="n"/>Não
					</p>
					<p>Deixe aqui sua mensagem:<br>
						<textarea name="mensagem" cols="58" rows="15"></textarea>
					</p>	
					<p>Envie um arquivo: 
						<input type="file" name="arquivo"/>
					</p>
				
				<input type="submit" value="Enviar"/>
				<button type="reset"> Limpar
				</center>
			</fieldset>
		</figure>
	</hgroup>
</section>