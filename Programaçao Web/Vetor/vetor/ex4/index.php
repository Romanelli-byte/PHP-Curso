<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 1</title>
</head>
<body>
    <form action ="processa.php" method="POST">
    <fieldset>
        <legend>10 valores reais</legend>
        <?php
            for($i = 0; $i < 10; $i++){
                echo 'Valor '.$i.':<input type="number" step="0.01" name="x[]" />';
            }
            for($i = 0; $i < 10; $i++){
                echo 'Valor '.$i.':<input type="number" step="0.01" name="y[]" />';
            }
        ?>
    </fieldset>    
    <input type="submit" value="Enviar"/>
</body>
</html>