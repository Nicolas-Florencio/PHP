<meta charset="UTF-8">
<?php

    $n1 = 5;
    $n2 = 5;
    $n3 = 5;

    //se o maior for n3
    if($n3 > $n2 and $n2 > $n1){
        echo "O maior é: ".$n3;    
    }

    //se o maior for n2
    else if($n2 > $n1 and $n2 > $n3){
        echo "O maior é: ".$n2;
    }

    //se o maior for n1
    else if($n1 > $n2 and $n2 > $n3){
        echo "O maior é: ".$n1;
    }

    //se houver números iguais, quais são iguais
    else if($n1 == $n2 or $n2 == $n3 or $n1 == $n3){
        
        echo "Números iguais: ";

        if ($n1 == $n2 and $n2 == $n3){
            echo "Todos são iguais";    
        }
        else if($n1 == $n3){
            echo $n1." ".$n3;
        }
        else if($n2 == $n3){
            echo $n2." ".$n3;
        }
        else if ($n2 == $n1){
            echo $n2." ".$n1;
        }
        
    }



?>