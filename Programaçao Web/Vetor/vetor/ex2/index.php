<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 2</title>
</head>
<body>
    <form action ="processa.php" method="POST">
    <fieldset>
        <legend>10 valores reais</legend>
        <?php
            for($i = 0; $i < 3; $i++){
                echo 'Valor do vetor R'.$i.':<input type="number" step="0.01" name="vetr[]" />';
            }
            for($i = 0; $i < 7; $i++){
                echo 'Valor do vetor S'.$i.':<input type="number" step="0.01" name="vets[]" />';
            }
        ?>
    </fieldset>    
    <input type="submit" value="Enviar"/>
</body>
</html>