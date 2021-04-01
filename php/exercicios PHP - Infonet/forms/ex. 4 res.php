<meta charset="UTF-8">
<title>Retangulo</title>
<?php

    $larg = $_GET ["base"];
    $comp = $_GET ["alt"];
    $prec = $_GET ["preco"];
    $terreno = $prec * ($larg * $comp);
    echo "O preço do terreno é R$ ".$terreno. "<br>";
?>
<br><li><a href="ex. 4 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>