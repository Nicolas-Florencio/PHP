<meta charset="UTF-8">
<?php
    $link="exemplo7.xml";

    $xml = simplexml_load_file($link)->materia;

        foreach($xml->aula as $aula){
            
            echo"<strong>Título:</strong>" .
                utf8_decode($aula->titulo)."<br/>";

            echo"<img src='".$aula->imagem."'></img>";
                echo"<br/><br/>";
        }
?>