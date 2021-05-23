<?php

    $fileXML = "conteudo.xml";
    $contentXML = json_encode(simplexml_load_file($fileXML) -> conteudo, JSON_UNESCAPED_UNICODE);

    $fileJSON = fopen("conteudo.json", "w+");

    fwrite($fileJSON, $contentXML);
    fclose($fileJSON);

    echo "Arquivo convertido, XML para JSON: <a href='conteudo.json'>Visualizar</a>";

?>