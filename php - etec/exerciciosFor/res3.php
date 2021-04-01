<meta charset="UTF-8">
<title>2 numeros inteiros</title>

<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if($n2 < $n1){
        $n3 = $n1;
        $n1 = $n2;
        $n2 = $n3;
        $n3 = $n2;
        while($n2>=$n1){

            $potencia = $n2*$n2;

            echo $n3." = ".$potencia."<br>";
            $n2--;
            $n3--;
        }
    }
    else if($n1 == $n2){

        $potencia = $n1*$n1;
        echo $n1." = ".$potencia."<br>";
    }

    else{
        while($n1<=$n2){

            $potencia = $n1*$n1;

            echo $n1." = ".$potencia."<br>";
            $n1++;

        }
    }
?>

<br><li><a href="form3.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>