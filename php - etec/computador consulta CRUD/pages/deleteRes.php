<meta charset = "UTF-8">
<?php
    include_once('../conexao.php');
    $id = $_POST['id'];

    $sqldelete = "delete from processador where id = $id";

    $resultado = @mysqli_query($conexao, $sqldelete);
    if (!$resultado){
            header('Location: delete.php');
        }
        else{
            echo "Registro excluido com sucesso<br>";
        }

    mysqli_close($conexao);
?>
<br>
<li><a href="delete.php"> Excluir novamente </a></li>
<br><li><a href="../index.php"> Menu principal </a></li><br>