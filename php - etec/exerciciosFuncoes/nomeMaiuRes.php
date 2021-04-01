<meta charset="UTF-8">
<title>Nome</title>

<?php

    require "funcoes.php";
    $nome = $_GET["nome"];
    $nome = maiuscula($nome);
    echo "O nome em maiúsculo fica: ".$nome."<br>";

?>


<br><li><a href="nomeMaiuForm.php"> Calcular novamente </a></li>
<br><li><a href="index.php"> Voltar para a página de exercícios </a></li>