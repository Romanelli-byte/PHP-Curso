<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <form action ="processa.php" method="POST">
    <fieldset>
        <legend>valores reais</legend>
        <?php
            for($i = 0; $i < 5; $i++){
                echo '<p>Vendas '.$i.':<input type="number" step="0.01" name="vendas[]" /></p>';
                echo '<p>percentual '.$i.':<input type="number" step="0.01" name="prc[]" /></p>';
                echo '<p>Nomes '.$i.':<input type="number" step="0.01" name="nome[]" /></p>';
            }
        ?>
    </fieldset>    
    <input type="submit" value="Enviar"/>
</body>
</html>