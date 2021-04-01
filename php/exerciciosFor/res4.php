<meta charset="UTF-8">
<title>Tabuada</title>

<?php
    for($mult = 1; $mult<=10; $mult++){
        for($num = 1; $num<=10; $num++){
            $res = $num*$mult;
            echo $mult, "x", $num, " = ", $res, "<br>"; 
        }
    }


?>

<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>