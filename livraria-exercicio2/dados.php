<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Listar Agenda</title>
</head>
<body>
    <p>
       <a href="index.php">Cadastro de livros</a>
       <a href="dados.php">Dados dos livros</a>
    </p>

    <?php  
        include "funcoes.inc";
        dados_livros();
    ?>  
</body>
</html>