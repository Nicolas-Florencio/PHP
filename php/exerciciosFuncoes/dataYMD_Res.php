<meta charset="UTF-8">
<title>Data</title>

<?php

    require "funcoes.php";
    $d = $_GET["dia"];
    $m = $_GET["mes"];
    $y = $_GET["ano"];
    $data = data($d, $m, $y);
    echo "A data convertida fica: ".$data."<br>";
    ?>


    <br><li><a href="dataYMD_Form.php"> Calcular novamente </a></li>
    <br><li><a href="index.php"> Voltar para a página de exercícios </a></li>