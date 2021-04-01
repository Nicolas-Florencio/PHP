<meta charset="UTF-8">
<title>Retangulo</title>
<?php

    $valor = $_GET ["valor"];
    $taxa = $_GET ["taxa"];
    $tempo = $_GET ["tempo"];
    $prestacao = $valor + ($valor * ($taxa / 100) * $tempo);
    echo "O valor final da prestação é R$ ".$prestacao. "<br>";
?>
<br><li><a href="ex. 5 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>