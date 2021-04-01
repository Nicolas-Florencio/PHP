<meta charset="UTF-8">
<title>Ordem crescente</title>

<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    if($n1 < $n2 && $n2 < $n3){
        echo "A ordem <b>crescente</b> é: <br>".$n1."<br>".$n2."<br>".$n3."<br>";
    }
    else if($n2 < $n1 && $n1 < $n3){
        echo "A ordem <b>crescente</b> é: <br>".$n2."<br>".$n1."<br>".$n3."<br>";
    }
    else if($n3 < $n1 && $n1 < $n2){
        echo "A ordem <b>crescente</b> é: <br>".$n3."<br>".$n1."<br>".$n2."<br>";
    }
    else if($n1 < $n3 && $n3 < $n2){
        echo "A ordem <b>crescente</b> é: <br>".$n1."<br>".$n3."<br>".$n2."<br>";
    }
    else if($n2 < $n3 && $n3 < $n1){
        echo "A ordem <b>crescente</b> é: <br>".$n2."<br>".$n3."<br>".$n1."<br>";
    }
    else if($n3 < $n2 && $n2 < $n1){
        echo "A ordem <b>crescente</b> é: <br>".$n3."<br>".$n2."<br>".$n1."<br>";
    }


?>

<br><li><a href="form19.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>