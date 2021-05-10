<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<title>Tabela da Copa - Fase de Grupos</title>
		<style>
			fieldset{
				width: 100%;
			}
            img{
                width: 70px;
                height: 35px;
            }
            .coluna{
                display: inline-block;
                text-align: center;
            }
        </style>
	</head>
	<body>
        <h2>Tabela da Copa 2018 - Fase de Grupos</h2>
        <form action="oitavas_final.php" method="post">
		<div>
            <fieldset>
                <legend><h2>Grupo A</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoA_1" value="Arábia Saudita" required="required" />
                        <img src="img/Arábia Saudita.gif" /><br/>Arábia Saudita
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_1" value="Egito" required="required" />
                        <img src="img/Egito.gif" /><br>Egito
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_1" value="Rússia" required="required" />
                        <img src="img/Rússia.gif" /><br>Rússia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_1" value="Uruguai" required="required" />
                        <img src="img/Uruguai.gif" /><br>Uruguai
                    </div>
                </div>
                <br/>
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoA_2" value="Arábia Saudita" required="required" />
                        <img src="img/Arábia Saudita.gif" /><br/>Arábia Saudita
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_2" value="Egito" required="required" />
                        <img src="img/Egito.gif" /><br>Egito
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_2" value="Rússia" required="required" />
                        <img src="img/Rússia.gif" /><br>Rússia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoA_2" value="Uruguai" required="required" />
                        <img src="img/Uruguai.gif" /><br>Uruguai
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo B</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoB_1" value="Espanha" required="required" />
                        <img src="img/Espanha.gif" /><br/>Espanha
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_1" value="Irã" required="required" />
                        <img src="img/Irã.gif" /><br>Irã
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_1" value="Marrocos" required="required" />
                        <img src="img/Marrocos.gif" /><br>Marrocos
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_1" value="Portugal" required="required" />
                        <img src="img/Portugal.gif" /><br>Portugal
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoB_2" value="Espanha" required="required" />
                        <img src="img/Espanha.gif" /><br/>Espanha
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_2" value="Irã" required="required" />
                        <img src="img/Irã.gif" /><br>Irã
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_2" value="Marrocos" required="required" />
                        <img src="img/Marrocos.gif" /><br>Marrocos
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoB_2" value="Portugal" required="required" />
                        <img src="img/Portugal.gif" /><br>Portugal
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo C</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoC_1" value="Austrália" required="required" />
                        <img src="img/Austrália.gif" /><br/>Austrália
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_1" value="Dinamarca" required="required" />
                        <img src="img/Dinamarca.gif" /><br>Dinamarca
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_1" value="França" required="required" />
                        <img src="img/França.gif" /><br>França
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_1" value="Peru" required="required" />
                        <img src="img/Peru.gif" /><br>Peru
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoC_2" value="Austrália" required="required" />
                        <img src="img/Austrália.gif" /><br/>Austrália
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_2" value="Dinamarca" required="required" />
                        <img src="img/Dinamarca.gif" /><br>Dinamarca
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_2" value="França" required="required" />
                        <img src="img/França.gif" /><br>França
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoC_2" value="Peru" required="required" />
                        <img src="img/Peru.gif" /><br>Peru
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo D</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoD_1" value="Argentina" required="required" />
                        <img src="img/Argentina.gif" /><br/>Argentina
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_1" value="Croácia" required="required" />
                        <img src="img/Croácia.gif" /><br>Croácia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_1" value="Islândia" required="required" />
                        <img src="img/Islândia.gif" /><br>Islândia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_1" value="Nigéria" required="required" />
                        <img src="img/Nigéria.gif" /><br>Nigéria
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoD_2" value="Argentina" required="required" />
                        <img src="img/Argentina.gif" /><br/>Argentina
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_2" value="Croácia" required="required" />
                        <img src="img/Croácia.gif" /><br>Croácia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_2" value="Islândia" required="required" />
                        <img src="img/Islândia.gif" /><br>Islândia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoD_2" value="Nigéria" required="required" />
                        <img src="img/Nigéria.gif" /><br>Nigéria
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo E</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoE_1" value="Brasil" required="required" />
                        <img src="img/Brasil.gif" /><br/>Brasil
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_1" value="Costa Rica" required="required" />
                        <img src="img/Costa Rica.gif" /><br>Costa Rica
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_1" value="Sérvia" required="required" />
                        <img src="img/Sérvia.gif" /><br>Sérvia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_1" value="Suíça" required="required" />
                        <img src="img/Suíça.gif" /><br>Suíça
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoE_2" value="Brasil" required="required" />
                        <img src="img/Brasil.gif" /><br/>Brasil
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_2" value="Costa Rica" required="required" />
                        <img src="img/Costa Rica.gif" /><br>Costa Rica
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_2" value="Sérvia" required="required" />
                        <img src="img/Sérvia.gif" /><br>Sérvia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoE_2" value="Suíça" required="required" />
                        <img src="img/Suíça.gif" /><br>Suíça
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo F</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoF_1" value="Alemanha" required="required" />
                        <img src="img/Alemanha.gif" /><br/>Alemanha
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_1" value="Coreia do Sul" required="required" />
                        <img src="img/Coreia do Sul.gif" /><br>Coreia do Sul
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_1" value="México" required="required" />
                        <img src="img/México.gif" /><br>México
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_1" value="Suécia" required="required" />
                        <img src="img/Suécia.gif" /><br>Suécia
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoF_2" value="Alemanha" required="required" />
                        <img src="img/Alemanha.gif" /><br/>Alemanha
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_2" value="Coreia do Sul" required="required" />
                        <img src="img/Coreia do Sul.gif" /><br>Coreia do Sul
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_2" value="México" required="required" />
                        <img src="img/México.gif" /><br>México
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoF_2" value="Suécia" required="required" />
                        <img src="img/Suécia.gif" /><br>Suécia
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo G</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoG_1" value="Bélgica" required="required" />
                        <img src="img/Bélgica.gif" /><br/>Bélgica
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_1" value="Inglaterra" required="required" />
                        <img src="img/Inglaterra.gif" /><br>Inglaterra
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_1" value="Panamá" required="required" />
                        <img src="img/Panamá.gif" /><br>Panamá
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_1" value="Tunísia" required="required" />
                        <img src="img/Tunísia.gif" /><br>Tunísia
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoG_2" value="Bélgica" required="required" />
                        <img src="img/Bélgica.gif" /><br/>Bélgica
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_2" value="Inglaterra" required="required" />
                        <img src="img/Inglaterra.gif" /><br>Inglaterra
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_2" value="Panamá" required="required" />
                        <img src="img/Panamá.gif" /><br>Panamá
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoG_2" value="Tunísia" required="required" />
                        <img src="img/Tunísia.gif" /><br>Tunísia
                    </div>
                </div>
            </fieldset>
			</div>
			<div>
            <fieldset>
                <legend><h2>Grupo H</h2></legend>
                <label>Escolha quem se classifica em 1° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoH_1" value="Colômbia" required="required" />
                        <img src="img/Colômbia.gif" /><br/>Colômbia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_1" value="Japão" required="required" />
                        <img src="img/Japão.gif" /><br>Japão
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_1" value="Polônia" required="required" />
                        <img src="img/Polônia.gif" /><br>Polônia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_1" value="Senegal" required="required" />
                        <img src="img/Senegal.gif" /><br>Senegal
                    </div>
                </div>
                <br />
                <label>Escolha quem se classifica em 2° lugar</label>
                <div class="linha">
                    <div class="coluna">
                        <input type="radio" name="grupoH_2" value="Colômbia" required="required" />
                        <img src="img/Colômbia.gif" /><br/>Colômbia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_2" value="Japão" required="required" />
                        <img src="img/Japão.gif" /><br>Japão
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_2" value="Polônia" required="required" />
                        <img src="img/Polônia.gif" /><br>Polônia
                    </div>
                    <div class="coluna">
                        <input type="radio" name="grupoH_2" value="Senegal" required="required" />
                        <img src="img/Senegal.gif" /><br>Senegal
                    </div>
                </div>
            </fieldset>
			</div>
			<div style="float:bottom;">
            <p>
                <input type="submit" value="Enviar" />
            </p>
			<div>
        </form>
    </body>
</html>