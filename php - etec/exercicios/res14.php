<meta charset="UTF-8">

<!-- A jornada de trabalho semanal de um funcionário é de 40 horas. O
funcionário que trabalhar mais de 40 horas receberá hora extra, cujo cálculo é
o valor da hora regular com um acréscimo de 50%. Crie uma página que leia o 
número de horas trabalhadas em um mês, o salário por hora e escreva o
salário total do funcionário, que deverá ser acrescido das horas extras, caso
tenham sido trabalhadas (considere que o mês possua 4 semanas exatas). -->

<title>Jornada de trabalho</title>

<?php
    $time1 = $_GET["time1"];
    $time2 = $_GET["time2"];
    $time3 = $_GET["time3"];
    $time4 = $_GET["time4"];
    $money = $_GET["money"];

    $work = $time1 + $time2 + $time3 + $time4;
    /* se irei receber as horas mensais
 ela deverá ser igual a 4*40, se n for maior que 160hrs n houve hr extra, caso contrário terá */

    if($work == 160){
        $salario = $money * $work;
        echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($salario,2)."<br>";
    }
    if($work>160){
        if($time1>40 && $time2==40 && $time3==40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra = $time1 * $moneyExtra;
            $salario = $time2 + $time3 + $time4;
            $newSalario = $salario + $timeExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1==40 && $time2>40 && $time3==40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra = $time2 * $moneyExtra;
            $salario = $time1 + $time3 + $time4;
            $newSalario = $salario + $timeExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1==40 && $time2==40 && $time3>40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra = $time3 * $moneyExtra;
            $salario = $time1 + $time2 + $time4;
            $newSalario = $salario + $timeExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1==40 && $time2==40 && $time3==40 && $time4>40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra = $time4 * $moneyExtra;
            $salario = $time1 + $time2 + $time3;
            $newSalario = $salario + $timeExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2>40 && $time3>40 && $time4>40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time2 * $moneyExtra;
            $timeExtra3 = $time3 * $moneyExtra;
            $timeExtra4 = $time4 * $moneyExtra;
            $salario = $timeExtra1 + $timeExtra2 + $timeExtra3 + $timeExtra4;
            $newSalario = $salario;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2>40 && $time3==40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time2 * $moneyExtra;
            $salarioExtra = $timeExtra1 + $timeExtra2;
            $salario = $time3 + $time4;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2==40 && $time3>40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time3 * $moneyExtra;
            $salarioExtra = $timeExtra1 + $timeExtra2;
            $salario = $time2 + $time4;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2==40 && $time3==40 && $time4>40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time4 * $moneyExtra;
            $salarioExtra = $timeExtra1 + $timeExtra2;
            $salario = $time2 + $time3;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2>40 && $time3==40 && $time4>40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time4 * $moneyExtra;
            $timeExtra3 = $time2 * $moneyExtra;
            $salarioExtra = $timeExtra3 + $timeExtra1 + $timeExtra2;
            $salario = $time3;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1==40 && $time2>40 && $time3>40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time2 * $moneyExtra;
            $timeExtra2 = $time3 * $moneyExtra;
            $salarioExtra = $timeExtra1 + $timeExtra2;
            $salario = $time1 + $time4;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }
        if($time1>40 && $time2>40 && $time3>40 && $time4==40){
            $meio = $money/2; 
            $moneyExtra = $money + $meio;
            $timeExtra1 = $time1 * $moneyExtra;
            $timeExtra2 = $time2 * $moneyExtra;
            $timeExtra3 = $time3 * $moneyExtra;
            $salarioExtra = $timeExtra1 + $timeExtra2 + $timeExtra3;
            $salario = $time4;
            $newSalario = $salario + $salarioExtra;
            echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
        }

}





    /*else if($work>160){
        $salario = $money * $work;
        $meio = $salario/2; 
        $extra = $work-160;
        $newSalario = $extra * $meio;
        $newSalario = $salario + $newSalario;
        echo "O funcionário trabalhou ".$work." horas no mês e seu salário será de: ".number_format($newSalario,2)."<br>";
    }*/



?>

<br><li><a href="form14.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>