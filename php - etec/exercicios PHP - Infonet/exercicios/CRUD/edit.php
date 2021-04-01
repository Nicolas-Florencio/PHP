<meta charset="UTF-8">
<link rel="stylesheet" href="../estilos/tabela.css">


<?php

    include_once('../conexao.php');

    if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){

        $id = base64_decode($_GET['id']);
    } 
    else {
        echo 
            "<script>
                alert('ID inválido, voltando para o menu!');
                location.href='../index.html';
            </script>";
    } 

    $select = "select * from cliente where idCliente = $id";

    $resultado = @mysqli_query($conexao, $select);
    $dados = mysqli_fetch_array($resultado);

    mysqli_close($conexao);
?>
<button onclick="goBack()"> Voltar</button>
    <center>
        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo base64_encode($dados['idCliente']); ?>" readonly>

            <label for="nome">Nome: </label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $dados['nome']; ?>" required><br>

            <label for="sexo">Sexo: </label><br>

                <select id="sexo" name="sexo" required>
                    <option value="<?php echo $dados['sexo']; ?>"><?php echo ucfirst($dados['sexo']); ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                </select>

            <br>
            <label for="idade">Idade: </label><br>
            <input type="number" id="idade" name="idade" value="<?php echo $dados['idade']; ?>" required>

            <br><br>    

            <input type="reset" value="Limpar">
            <input type="submit" value="Atualizar">

            <br><br>

        </form>
    </center>
<script>
    function goBack(){
        window.history.back()
    }
</script>
