<!-- Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média
aritmética e escrever uma mensagem que diga se o aluno foi ou não aprovado
(considerar que nota igual ou maior que 5 o aluno é aprovado). Escrever
também a média calculada.
 -->
<meta charset="UTF-8">

<title>Aprovado ou reprovado?</title>

<?php

    $not1 = $_GET["n1"];
    $not2 = $_GET["n2"];
    if($not1==null && $not2==null){
        header('Location: form9.php');
    }
    $media = ($not1+$not2)/2;
    if($media>=5){
        echo "O aluno foi <strong>APROVADO</strong> com uma média de: ".$media."<br>";
    }
    else if ($media<5){
        echo "O aluno foi <strong>REPROVADO</strong> com uma média de: ".$media."<br>";
    }

?>

<br><li><a href="form9.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>