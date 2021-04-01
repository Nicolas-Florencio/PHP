<?php

    include_once('../conexao.php');

    $id = base64_decode($_POST['id']);;
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    strtolower($sexo);

    $sqlUpdate = "update cliente set

        nome = '$nome',
        sexo = '$sexo',
        idade = '$idade'
        where idCliente = '$id'

    ";

    $resultado = @mysqli_query($conexao, $sqlUpdate);

    if (!$resultado){
        die('Problema ao atualizar: '. mysqli_error($conexao));
    }
    else{
        echo 
            "<script>
                alert('Cadastro atualizado com sucesso!');
                location.href='read.php';
            </script>";
    }

    mysqli_close($conexao);
?>