<meta charset="UTF-8">
<title>Soma de 2 maiores</title>

<?php
    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $v3 = $_GET["v3"];

    if($v1>$v2 && $v2>$v3){
        $soma = $v1 + $v2;
        echo "A soma dos 2 maiores é de: ".$soma."<br>";
    }
    else if($v2>$v1 && $v3>$v2){
        $soma = $v2 + $v3;
        echo "A soma dos 2 maiores é de: ".$soma."<br>";
    }
    else if($v3>$v2 && $v1>$v2){
        $soma = $v1 + $v3;
        echo "A soma dos 2 maiores é de: ".$soma."<br>";
    }

?>

<br><li><a href="form18.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>