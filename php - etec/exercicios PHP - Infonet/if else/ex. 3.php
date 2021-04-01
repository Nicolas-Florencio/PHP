<meta charset="UTF-8">
<?php
    $altura = 1.80;
    $secso = 2; 
    /*
        1 = Feminino
        2 = Masculino
    */

    
    //caso pessoa do sexo feminino
    if ($secso == 1){
        echo "Seu peso ideal é: ".((62.1 * $altura) - 44.7);
    }
    
    //caso pessoa do sexo masculino
    else if ($secso == 2){
        echo "Seu peso ideal é: ".((72.7 * $altura) - 58);
    }
    
    //caso pessoa de sexo fictício ou número inválido
    else{
        echo "Sexo/número inválido";
    }

?>