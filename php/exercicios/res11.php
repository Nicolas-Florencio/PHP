<meta charset="UTF-8">

<!-- Ler 3 valores e escrever o maior deles -->

<title>Maior de 3</title>

<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    if( $n1==null && $n2==null && $n3==null){
        header('Location: form11.php');
    }

    if ($n1>$n2 && $n1>$n3){
        echo "O maior número é: <strong>".$n1."</strong> <br>";
    }
    else if ($n2>$n1 && $n2>$n3){
        echo "O maior número é: <strong>".$n2."</strong> <br>";
    }
    else if ($n3>$n1 && $n3>$n2){
        echo "O maior número é: <strong>".$n3."</strong> <br>";
    }
    else{
        echo "Os número são iguais! <br>";
    }

?>


<br><li><a href="form11.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>
