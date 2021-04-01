<meta charset="UTF-8">
<title>Retangulo</title>
<?php

    $n1 = $_GET ["base"];
    if($n1==null){
        header('Location: form1.php');
    }
    $n2 = $_GET ["alt"];
    $area = $n1 * $n2;
    echo "A área do retangulo é: ".$area. "<br>";
?>
<br><li><a href="ex. 1 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>