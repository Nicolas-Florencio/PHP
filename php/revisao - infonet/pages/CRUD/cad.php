<?php


    $nome = $_GET['nome'];
    $sexo = $_GET['sexo'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $endereco = $_GET['endereco'];
    $numero = $_GET['numero'];
    $cep = $_GET['cep'];
    $bairro = $_GET['bairro'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['uf'];
    $telCel = $_GET['telCel'];
    $telCom = $_GET['telCom'];
    $gpRisco = $_GET['gpRisco'];
    
    echo $nome . $sexo . $email . $senha . $endereco . $numero . $cep . $bairro . $cidade . $uf .
    $telCel . $telCom . $gpRisco;



?>