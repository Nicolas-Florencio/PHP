<meta charset="UTF-8"> 
<?php
    $user='
    {
        "admin":{
            "url":"https://www.google.com.br",
            "codigo":200
        },
        "usuario":{
            "url":"https://www.bing.com/",
            "codigo":404
        }
    }';$dados=json_decode($user); 
    echo"<b>Admin:</b>".$dados->admin->url.'<br/>';
    echo"<b>Código:</b>".$dados->admin->codigo;
    echo"<hr>";
    echo"<b>Usuário:</b>". $dados->usuario->url.'<br/>';
    echo"<b>Código:</b>".$dados->usuario->codigo;
?>