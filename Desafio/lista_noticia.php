<?php
    $rss = simplexml_load_file("g1_arq.xml");
    $canal = $rss->channel;
    $cont = $_GET["conteudo"];
    $cont2=0;

    foreach($canal->item as $c)
        {
            if ($cont == $cont2)
                {
                    echo $c->title."</br>";
                    echo $c->description."</br>";
                    
                }
            $cont2++;
               
        }
    echo "<a href=\"index.php\">Home</a>";


    


?>