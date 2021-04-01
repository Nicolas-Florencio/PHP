<?php

    include_once('../conexao.php');

    $id = base64_decode($_GET['id']);

    $sqlDelete = "delete from cliente where idCliente = '$id'";

    $resultado = @mysqli_query($conexao, $sqlDelete);

    if (!$resultado){
        die('Problema ao excluir: '. mysqli_error($conexao));
    }
    else{
        echo 
            "<script>
                alert('Cliente excluido com sucesso!');
                location.href='read.php';
            </script>";
    }
?>