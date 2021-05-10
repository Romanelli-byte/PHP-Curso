<?php
    function noticia()
        {
            $rss = simplexml_load_file("g1_arq.xml");
            $canal = $rss->channel;
            $cont = 0;

            foreach($canal->item as $c)
                {
                    echo $c->title;
                    
                    echo "<a href=\"lista_noticia.php?conteudo=$cont\">Próxima Página</a></br>";
                    $cont++;
                }
            
                

            echo "</br></br><a href=\"index.php\">voltar</a>";
        } 
?>