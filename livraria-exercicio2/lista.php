<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Listar Agenda</title>
</head>
<body>
    <p>
       <a href="index.php">Cadastro de livros</a>
       <a href="lista.php">lista de livros</a>
    </p>

    <?php  
        include "funcoes.inc";
        lista_livros();
    ?>  
</body>
</html>