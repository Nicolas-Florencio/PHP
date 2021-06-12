<?php

    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');
    require("../conexao.php");

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $emailJSON = @$request->email;
    $senhaJSON = @$request->senha;

    if($emailJSON || $senhaJSON) {
        $query = @mysqli_query($conexao, "select * from usuario where email = '$emailJSON' and password = $senhaJSON");
    
        //verifica se a query retorna um valor
        $num = @mysqli_num_rows($query);
        if($num == 0){
            
            $resposta = 'Usuário ou senha inválidos';
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
            die();

        }
        
        $resultado = $query->fetch_array(MYSQLI_ASSOC);
        $object = (object) $resultado;

        http_response_code(200);
        echo json_encode('Bem vindo '.$object->email, JSON_UNESCAPED_UNICODE);
        die();
    }
    if(empty($_POST['email']) || empty($_POST['senha'])){

        echo "Os campos não podem estar vazios";
        // die();
    }    

    $email = $_POST["email"];
    $pass = $_POST["senha"];

    $query = @mysqli_query($conexao, "select * from usuario where email = '$email' and password = $pass");
    
    //verifica se a query retorna um valor
    $num = @mysqli_num_rows($query);
    if($num == 0){
        
        $resposta = 'Usuário ou senha inválidos';
        echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
        die();

    }
    
    $resultado = $query->fetch_array(MYSQLI_ASSOC);
    $object = (object) $resultado;

    http_response_code(200);
    echo json_encode('Bem vindo '.$object->email, JSON_UNESCAPED_UNICODE);
?>