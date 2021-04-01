<?php
$listadeprodutos = '
    [
        {
            "titulo": "Chave de Fenda",
            "vlr": 2.50
        },
        {
            "titulo": "Alicate",
            "vlr": 4.70
        },
        {
            "titulo": "Martelo",
            "vlr": 10.50
        }
    ]';
$json = json_decode($listadeprodutos);
    foreach ($json as $registro) {
    echo "<b>Produto</b> " . $registro->titulo . '<br />';
    echo "<b>Valor:</b> " . $registro->vlr;
    echo "<hr>";
    }
?>
