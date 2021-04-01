<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../estilos/tabela.css'>
    <title>Index</title>
</head>
<body>
    
    <center>

        <h1>Login</h1>

            <form action="validaLogin.php" method="POST">

                <label for="nome">Usuário: </label><br>
                <input type="text" id="usuario" name="usuario"  ><br>

                <br>
                <label for="idade">Senha: </label><br>
                <input type="password" id="senha" name="senha" >
                
                <br><br>    

                <input type="reset" value="Limpar">
                <input type="submit" value="Login">

            </form><br>
            <?php
                include_once('../conexao/conexao.php');

                $query = mysqli_query($conexao, "select * from usuarios");
                $num = @mysqli_num_rows($query);

                    if($num > 0){
                        echo "sucesso";
                    }
                    else{
                        echo "oh no";
                    }

                
            ?>
            <br><br>
        <table>
            <thead>
                <th>Usuário</th>
                <th>Senha</th>
                <th>Acesso</th>
            </thead>

            <?php 
                while($dados = mysqli_fetch_array($query)){ 
                    echo "<tr>";

                    echo    "<td>". $dados['usuario'] ."</td>";
                    echo    "<td>". $dados['senha'] ."</td>";
                    echo    "<td>". $dados['acesso'] ."</td>";
                    
                    echo "</tr>";
                    
                }
            ?>
        </table>
    </center>
</body>
</html>