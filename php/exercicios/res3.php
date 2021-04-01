<meta charset="UTF-8">
<title>Soma</title>
<?php

$n1 = $_GET ["n1"];
if($n1==null){
    header('Location: form3.php');
}
$n2 = $_GET ["n2"];
$n3 = $_GET ["n3"];
$n4 = $_GET ["n4"];
$soma= $n1+$n2+$n3+$n4;
echo "O resultado da soma dos 4 números é: ".$soma."<br>";
?>
<br><li><a href="form3.php"> Calcular novamente </a></li>
<li><a href="index.php"> Voltar para a página de exercícios </a></li><br>
