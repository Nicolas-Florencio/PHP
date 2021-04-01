<meta charset="UTF-8">
<?php
    $n1 = 2;
    $n2 = 2;
    $n3 = 4;
    $n4 = 20;
    $soma = $n1 + $n2 + $n3 + $n4;

    if ($soma > 20 and $soma < 50){
        echo "Entrou no if, então soma 15 = ".($soma + 15)."<br>Antes da soma era: ".$soma;
    }
    else{
        echo "Não é maior que 20 e menor que 50";
    }
?>