<meta charset="UTF-8">
<?php
    $link = "exemplo5.xml";
        $xml = simplexml_load_file($link)->materia;

            foreach($xml -> aula as $aula){

                    echo"<strong>Título:</strong>" . 
                        ($aula -> titulo)."<br/>";

                    echo"<strong>Texto:</strong>" . 
                        ($aula -> texto)."<br/>";

                    echo"<br/>";
            }
            echo"<hr>";

            foreach($xml->nota as $nota){

                echo"<strong>Avaliação:</strong>" .
                    ($nota -> avaliacao)."<br/>";

                echo"<strong>Peso:</strong>" .
                    ($nota -> peso)."<br/>";
                    
                echo"<br/>";
            }
?>