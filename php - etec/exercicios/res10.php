<meta charset="UTF-8">

<!-- Ler dois valores e escrevê-los em ordem crescente. -->
<title>Ordem crescente</title>

<?php

    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    if($v1==null && $v2==null){
        header('Location: form10.php');
    }
    if ($v1<$v2){
        echo "Os dois números em ordem crescente são: ".$v1." e ".$v2."<br>";
    }
    else if ($v1 == $v2){
        echo "Os números são iguais! <br>";
    }
    else{
        echo "Os dois números em ordem crescente são: ".$v2." e ".$v1."<br>";
    }
?>

<br><li><a href="form10.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>