<meta charset="UTF-8">
<title>Multi 1 a 10</title>

<?php
    $num = $_GET["num"];
    $multi = 1;
    while($multi<=10){
        $res = $num*$multi;
        echo $num, "x", $multi, " = ", $res, "<br>"; 
        $multi++;
    }

?>



<br><li><a href="form6.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>