<meta charset="UTF-8">
<title>Estoque</title>

<?php
    $quant = $_GET["quant"];
    $quantMax = $_GET["quantMax"];
    $quantMin = $_GET["quantMin"];

    $media = ($quantMax + $quantMin)/2;

    if($quant>=$media){
        echo "Há em média no estoque: ".$media." produtos<br>";
        echo "<br><strong>Não efetuar compra</strong><br>";
    }
    else{
    echo "Há em média no estoque: ".$media." produtos<br>";
    echo "<br><strong>Efetuar compra</strong><br>";
    }
?>

<br><li><a href="form17.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>