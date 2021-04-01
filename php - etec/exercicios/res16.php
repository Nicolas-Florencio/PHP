<meta charset="UTF-8">
<title>Saldo de conta</title>

<?php
    $numConta = $_GET["numConta"];
    $saldoConta = $_GET["saldoConta"];
    $debConta = $_GET["debConta"];
    $credConta = $_GET["credConta"];

    $saldoAtual = $saldoConta - $debConta + $credConta;

    if($saldoAtual>=0){
        echo "O saldo da conta é de ".number_format($saldoAtual,2)."<br>";
        echo "<br>Saldo Positivo<br>";
    }
    else{
        echo "O saldo da conta é de ".number_format($saldoAtual,2)."<br>";
        echo "<br>Saldo Negativo<br>";
    }


?>

<br><li><a href="form16.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>