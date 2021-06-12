<?php
    $conexao = new mysqli("localhost:3307", "root", "usbw");
    $conexao->set_charset("UTF8");

    if ($conexao->connect_error) {
        die("Falha ao conectar: " . $conexao->connect_error);
    }
    if (!$conexao->select_db("api_login")) {
        die("O Banco de dados não existe");
    }
?>  