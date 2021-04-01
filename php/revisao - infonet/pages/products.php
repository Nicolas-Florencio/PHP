<?php

    require_once "/conexao/conexao.php";
    $query = mysqli_query($conexao, "select * from produtos");
    if (!$query){
        die("Query inválida: " . @mysqli_error($conexao));
    }
    
?>

<div class="container-fluid p-0">
    <table class="table table-responsive table-dark table-hover">
        <thead>
            <tr>
                <th></th>
                <th>ID:</th>

                <th>Nome:</th>
            
                <th>Quantidade:</th>
            
                <th>Preço:</th>
            
                <th>Quant. Vendida</th>

                <th>Tamanho</th>
            </tr>
        </thead>
        <tbody>
            <?php while($dados = mysqli_fetch_array($query)){ ?>
            <tr>
                <td></td>
                <td>
                    <?php echo $dados['idProduto']; ?>
                </td>
                <td>
                    <?php echo $dados['nome']; ?>
                </td>
                <td>
                    <?php echo $dados['quant']; ?>
                </td>
                <td>
                    <?php echo $dados['preco']; ?>
                </td>
                <td>
                    <?php echo $dados['vendidos']; ?>
                </td>
                <td>
                    <?php echo $dados['tamanho']; }?>
                </td>
            </tr>
        </tbody>
    </table>
</div>