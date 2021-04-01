<?php
    $arquivo = file_get_contents('produtos.json');

    $json = json_decode($arquivo);
    
    foreach ($json as $registro) {
        echo "<b>Produto</b> " . $registro->titulo . '<br />';
        echo "<b>Valor:</b> " . $registro->vlr . '<br />';
        echo "<hr>";
    }
?>