<meta charset="UTF-8">
<title>Quad da soma de 3n</title>
<?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $quad = ($n1 + $n2 + $n3) * ($n1 + $n2 + $n3);
    echo "O quadrado da soma é: ".$quad. "<br>";
?>
<br><li><a href="ex. 3 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>