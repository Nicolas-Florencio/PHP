<?php
    $host = "localhost";
    $user = "root";
    $pass = "usbw";
    $banco = "test";

    //criando o comando de conexão
    $conexao = @mysqli_connect($host, $user, $pass, $banco)
    or die ("Problemas com a conexão do Banco de dados");

    mysqli_set_charset($conexao, "UTF-8");
?>