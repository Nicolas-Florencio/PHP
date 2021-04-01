<meta charset="UTF-8">
<?php
    $link="exemplo6.xml";
        $xml = simplexml_load_file($link)->materia;
        
            foreach($xml->aula as $aula){

                echo"<strong>Título:</strong>" .
                    ($aula->titulo)."<br/>";

                echo"<strong>Texto:</strong>" .
                    ($aula->texto)."<br/>";

            foreach($aula->topico as $topico){
                
                echo"<strong>Item:</strong>".
                    ($topico->item01)."<br/>";
                    
                echo"<strong>Item:</strong>" .
                    ($topico->item02)."<br/>";
            }
                echo"<hr/>";
            }
?>