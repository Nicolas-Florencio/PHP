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
<br><li><a href="form1.php"> Calcular novamente </a></li>
<li><a href="index.php"> Voltar para a página de exercícios </a></li><br>