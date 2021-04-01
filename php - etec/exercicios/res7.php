<meta charset="UTF-8">
<title>Positivo/Negativo</title>
<?php
    $n = $_GET["posi"];
    if($n==null){
        header('Location: form7.php');
    }
    if($n>0){
        echo "O número é <strong>positivo</strong><br>";
    }
    else if($n<0){
        echo "O número é <strong>negativo</strong><br>";
    }
    else{
        echo "0 é neutro <br>";
    }
?>

<br><li><a href="form7.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>