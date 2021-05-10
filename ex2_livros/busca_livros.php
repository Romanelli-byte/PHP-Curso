<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Busca Livro</title>
</head>
<body>
    <?php  
        include "funcoes.inc";
		include "menu.inc";
		
		if(empty($_POST))
		{
			include "form_busca.inc";
		}
		else 
		{
			busca_livro();
		}	
    ?>  
</body>
</html>