<!DOCTYPE html>
<meta charset="UTF-8">
<button><a href="login.php">Voltar</a></button>

<?php
    session_start();

    if(empty($_POST['login']) || empty($_POST['senha'])){

        $_SESSION['validaLogin'] = "Os campos não podem estar vazios";
        header('location: login.php');
        exit();


    }    
    
    if (isset($_POST['login']) && isset($_POST['senha'])){

        include_once("../conexao.php");

        
        $login = mysqli_escape_string($conexao, $_POST['login']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
        $senha = md5($senha);

        $select = "select * from login WHERE
        login = '$login' 
        AND
        senha = '$senha'
        LIMIT 1";

        $resultado = mysqli_query($conexao, $select);

        $num = @mysqli_num_rows($resultado);
        
        $dados = mysqli_fetch_array($resultado);

        if (empty($dados) || $num == 0){

            $_SESSION['validaLogin'] = "Usuário não cadastrado";

            header('location: login.php');
            exit();
        }
        else{
            
            $_SESSION['logado'] = true;
            header("location: ../CRUD/read.php");
            
            echo "deu bom";
           
            exit ();
        }
    }

?>