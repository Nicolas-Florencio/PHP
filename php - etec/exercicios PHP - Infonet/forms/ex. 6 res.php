<meta charset="UTF-8">
<title>Aumento</title>
<?php

    $salario_old = $_GET ["salario_old"];

    if($salario_old==null){
        header('Location: form4.php');
    }

    $aumento = $_GET ["aumento"];

    $salario_new = $salario_old + ($salario_old*($aumento/100));
    echo "O salário anterior era de R$ ".$salario_old." e agora é de R$".$salario_new."<br>";

?>

<br>
<li><a href="ex. 6 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>
