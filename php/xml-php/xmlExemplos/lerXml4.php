<meta charset="UTF-8">
<?php

    $xml= '<?xml version="1.0"?>
        <array>
            <materia>
                <aula>
                    <titulo>Aula01</titulo>
                    <texto>UsandoXMLcomPHP</texto>
                </aula>
            </materia>
        </array>';
        
    $var= simplexml_load_string ($xml);

    echo $var->materia->aula->titulo;

    echo"<br/>";
    echo $var->materia->aula->texto;
?>