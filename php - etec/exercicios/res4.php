<meta charset="UTF-8">
<title>Aumento</title>
<?php

$salario_old = $_GET ["salario_old"];

if($salario_old==null){
    header('Location: form4.php');
}

$aumento = $_GET ["aumento"];

$salario_new = $salario_old + ($salario_old*($aumento/100));
echo "O salário anterior era de ".$salario_old."$ e agora é de ".$salario_new."$<br>";
?>
<br><li><a href="form4.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>
