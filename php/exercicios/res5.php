<meta charset="UTF-8">
<title>Temperatura</title>
<?php
    $option = $_GET ["option"];
    
    if($option==null){
        header('Location: form5.php');
    }

    if ($option == 1){
    $celsius = $_GET ["temp"];
    $fahren=($celsius*1.8) + 32.00;
    echo $celsius." graus Celsius em graus Fahrenheit são: ".$fahren." graus Fahrenheit<br>";
    }
    if ($option == 2){
    $fahren = $_GET ["temp"];
    $celsius= ($fahren-32)/1.8;
    echo $fahren." graus Fahrenheit em graus Celsius são: ".number_format($celsius,2)." graus Celsius<br>";
    }
    else{
        return false;
    }
?>
<br><li><a href="form5.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li><br>