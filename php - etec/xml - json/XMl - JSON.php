<?php   

$conteudoXML =  <<<XML
<?xml version='1.0' encoding="UTF-8"?>
    <array>
        <conteudo>
            <bloco>
                <titulo>Título 01</titulo>
                <texto>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam laboriosam quam vitae doloribus, voluptatum odio voluptatem explicabo impedit exercitationem mollitia quos possimus ipsa, et quo. Quod doloribus dolorem placeat.</texto>
            </bloco>

            <bloco>
                <titulo>Título 02</titulo>
                <texto>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam laboriosam quam vitae doloribus, voluptatum odio voluptatem explicabo impedit exercitationem mollitia quos possimus ipsa, et quo. Quod doloribus dolorem placeat.</texto>
            </bloco>

            <bloco>
                <titulo>Título 03</titulo>
                <texto>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam laboriosam quam vitae doloribus, voluptatum odio voluptatem explicabo impedit exercitationem mollitia quos possimus ipsa, et quo. Quod doloribus dolorem placeat.</texto>
            </bloco>

            <bloco>
                <titulo>Título 04</titulo>
                <texto>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quibusdam laboriosam quam vitae doloribus, voluptatum odio voluptatem explicabo impedit exercitationem mollitia quos possimus ipsa, et quo. Quod doloribus dolorem placeat.</texto>
            </bloco>
        </conteudo>
    </array>
XML;


    $xml = simplexml_load_string($conteudoXML);
    $conteudoJSON = json_encode($xml); 
    echo $conteudoJSON;
?>