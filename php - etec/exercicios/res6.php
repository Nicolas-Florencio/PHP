<meta charset="UTF-8">
<title>Número maior que 10</title>
<?php
    $num = $_GET["num"];
    if($num==null){
        header('Location: form6.php');
    }
    if($num>10){
        echo "O NÚMERO É MAIOR QUE 10 <br>";
    }
    else if($num<10){
        echo "O NÚMERO É MENOR QUE 10 <br>";
    }
    else{
        echo "O NÚMERO É: 10 <br>";
    }
?>

<br><li><a href="form6.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>