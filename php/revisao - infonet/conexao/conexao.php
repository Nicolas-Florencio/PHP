<?php

    $host = "localhost";
    $user = "root";
    $pass = "usbw";
    $banco = "infonet";

    $conexao = mysqli_connect($host, $user, $pass, $banco)
    or die ("Problemas na conexão");


    mysqli_set_charset($conexao, "UTF-8");

?>