<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Teste de função</title>

</head>
<body>
<?php
    require "funcoes.php";
    

    $nome = maiuscula("Nicolas");
    echo "Em Maiusculo: ". $nome;

    $data1 = data(14/08/2020);
    echo "<br>A data (d/m/y) ao contrário fica: ". $data1;

    $data2 = data2(2020/08/14);
    echo "<br>A data (y/m/d) ao contrário fica: " .$data2;

    $fato = fatorial(5, 1, 1);
    echo "<br>O Fatorial do número 5 é: ". $fato;
?>
    <br><button><a href="exercicios.php">Voltar aos Exercícios</button>
</body>
</html>
