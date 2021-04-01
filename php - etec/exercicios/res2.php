<meta charset="UTF-8">
<div id="principal">
    <title>Votação</title>
  <h1>Porcentagem de votos</h1>
<?php
$n1 = $_GET ["vot1"];
if($n1==null){
  header('Location: form2.php');
}
$n2 = $_GET ["vot2"];
$n3 = $_GET ["votbranco"];
$n4 = $_GET ["votnul"];
$total = $n1+ $n2+ $n3+ $n4;
$porcvot1 =  (100*$n1)/$total;
$porcvot2 = (100*$n2)/$total;
$votbranco = (100*$n3)/$total;;
$votnul = (100*$n4)/$total;;
echo "<strong>O total de votos é de: ".$total. "</strong><br>";
echo "A porcentagem de votos do <strong>Candidato 1</strong> foi de: <strong>".number_format($porcvot1,2)."</strong>%<br>";
echo "A porcentagem de votos do <strong>Candidato 2</strong> foi de: <strong>".number_format($porcvot2,2)."</strong>%<br>";
echo "A porcentagem de votos <strong>Brancos</strong> foi de: <strong>".number_format($votbranco,2)."</strong>%<br>";
echo "A porcentagem de voto(s) <strong>Nulo(s)</strong> foi de: <strong>".number_format($votnul,2)."</strong>%<br>";
?>
<br><li><a href="form2.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>
<li><a href="../index.html"> Voltar para o menu principal</a></li>
