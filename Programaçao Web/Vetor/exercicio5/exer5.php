<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercicio 5</title>
</head>
<body>
    <form action ="processa5.php" method="POST">
    <fieldset>
        <legend>Relatório</legend>
        <?php
            for($i = 1; $i < 6; $i++)
			{
                echo '<p>Nome '.$i.': <input type="number" step="0.01" name="nome[]"/></p>';
                echo '<p>Venda  '.$i.': <input type="number" step="0.01" name="vend[]"/></p>';
                echo '<p>Percentual '.$i.': <input type="number" step="0.01" name="perc[]"/></p>';
				echo "<hr/>";
				
            }
        ?>
    </fieldset>    
    <input type="submit" value="Enviar"/>
</body>
</html>