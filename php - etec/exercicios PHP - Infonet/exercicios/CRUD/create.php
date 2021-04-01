<meta charset="UTF-8">
<?php
    include_once('../conexao.php');

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);


    strtolower($sexo);

        $sqlInsertCli = "insert into cliente (nome, sexo, idade) values(
        '$nome',
        '$sexo',
        $idade
        )";

        $sqlInsertLog = "insert into login (login, senha) values(
        '$login',
        '$senha'
        )";
    
    $resultadoCli = @mysqli_query($conexao, $sqlInsertCli);
    $resultadoLog = @mysqli_query($conexao, $sqlInsertLog);
        
        if (!$resultadoCli || !$resultadoLog) {
            die('Problema ao criar: ' . mysqli_error($conexao));
        } 
        else {
            echo 
            "<script>
                alert('Cadastro efetuado com sucesso!');
                location.href='../index.html';
            </script>";
        }
        
        mysqli_close($conexao);
?>