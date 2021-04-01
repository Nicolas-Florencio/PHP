<meta charset="UTF-8">

<?php

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        echo 
                "<script>
                    alert('Campos faltando, voltando para o menu!');
                    location.href='login.php';
                </script>";
    }

    else{

        include_once('../conexao/conexao.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $query = mysqli_query($conexao, "select * from usuarios where usuario = '$usuario' and senha = '$senha'");
        $num = @mysqli_num_rows($query);
    
        if ($num == 0){
            echo 
                "<script>
                    alert('Usuário inválido, voltando para o menu!');
                    location.href='login.php';
                </script>";
        }

        else {
    
            $dados = mysqli_fetch_array($query);
            
            $pasta = $dados['acesso'];

            header("Location: $pasta/index.php");
        }
        mysqli_close($conexao);
    }

    echo "a";
?>

