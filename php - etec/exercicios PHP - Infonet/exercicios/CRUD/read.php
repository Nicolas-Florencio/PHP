<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="../estilos/tabela.css">
<link rel="stylesheet" href="../estilos/login.css">
<button><a href="../index.html">Voltar</a></button>




<?php

    session_start();

    if(!$_SESSION['logado']){
        echo "eae mano";
        exit();
    }

    

    include_once('../conexao.php');

    $sqlSelect = "select * from cliente";

    $resultado = @mysqli_query($conexao, $sqlSelect);

    $num = @mysqli_num_rows($resultado);

    if($num == 0){
        echo "<center><b><h1>Não há registros!!!!</h1><br><br></b></center>";
    }
    else{

    
echo "<center>";
    echo "<h1>Lista de clientes</h1>";
        echo "<table>";
            echo "<thead>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th colspan='2'>Opção</th>

                </thead>";

            while($dados = mysqli_fetch_array($resultado)){
                $id = base64_encode($dados['idCliente']);
                //rows
                echo "<tr>";
                echo "<td>". $dados['idCliente'] ."</td>";
                echo "<td>". ucfirst($dados['nome']) ."</td>";
                echo "<td>". ucfirst($dados['sexo']) ."</td>";
                echo "<td>". $dados['idade']."</td>";
                echo "<td>". "<a href='edit.php?id=". $id ."'><button type='button'>Editar</button></a></td>";
                echo "<td>";
                ?>
                <a onclick='return confirm("Deseja excluir o usuário?")' href='delete.php?id=". <?php echo $id; ?>."'>
                <?php
                echo "<button type='button'>Excluir</button></a></td>";
                echo "</tr>";
            }
                echo "</table>";
            echo "</center>";
        echo '<button><a href="../login/logout.php">Sair da conta</a></button>';
    mysqli_close($conexao);
    }
?>
