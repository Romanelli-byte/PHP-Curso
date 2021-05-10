<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>BOLETIM</title>
</head>
<body>
<p>
        <a href="index.php">Cadastro de notas</a>
        <a href="lista.php">lista de medias</a>
    </p>
        <?php
            include "funcoes.inc";

                if(empty($_POST)){
                    include "form_cadastra_nota.inc";
                }
                else
                {
                    cadastra_nota();
                }
        ?>
    
</body>
</html>