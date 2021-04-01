<meta charset="UTF-8">
<title>Entre 1 e N</title>

<?php
    $n = $_POST["n"];
    $limit = 1;
    
    while($limit<=$n){
        echo $limit,"<br>";
        $limit++;
    }




?>
<br><li><a href="form4.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>