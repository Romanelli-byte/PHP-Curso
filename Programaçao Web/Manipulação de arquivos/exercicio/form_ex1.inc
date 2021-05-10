<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title> Exercício 1 </title>

</head>
<body>
	<form method="POST" action="setup.php">
        <fieldset>
            <legend>Configuração da página</legend>
            <p>
                <label>Cor de fundo: </label>
                <input type="color" name="cor"/>
            </p>
            <p>
                <label>Tamanho da Fonte: </label>
                <input type="text" name="tamanho"/>
            </p>
            <p>
                <label>Cor da fonte: </label>
                <input type="color" name="corfonte"/>
            </p>
            <p>
                <label>Alinhamento do texto: </label>
                <select name="alinhamento">
                    <option value="right">Á direita</option>
                    <option value="left">Á esquerda</option>
                    <option value="center">Centro</option>
                </select>
            </p>
            <p>
                <label>Alinhamento do H1: </label>
                <select name="h1">
                    <option value="right">Á direita</option>
                    <option value="left">Á esquerda</option>
                    <option value="center">Centro</option>
                </select>
            </p>
            <p>
                <label>Cor da fonte: </label>
                <input type="color" name="cor2"/>
            </p>
            <p>
                <input type="submit" value="Modificar Página"/>
                <input type="reset" value="Limpar"/>
            </p>
        </fieldset>
	</form>
</body>
<html>