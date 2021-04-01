<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h3> Exemplo 01 - Conexão</h3>
    <?php
        include_once ("conexao.php");
        // dados para a conexão MySql
        // ajuste os dados de conexão de acordo com o seu ambiente de trabalho
        
        //executa a query de acordo com base na conexão
        $query = mysqli_query($conexao, "select * from tabelaimg");

        //verifica se a query taokay?

        if (!$query){
            die ("Query inválida: " . @mysqli_error($conexao));
            //mostra o erro
        }
        echo "<table border='1px'>";
	    echo "<thead><th width='30px' align='center'>Id</th><th width='100px'>Código</th><th width='250px'>Produto</th><th width='100px'>Valor</th><th width='100px'>Produto</th><thead>";

	while($dados = mysqli_fetch_array($query)) {
        
		echo "<tr>";
		echo "<td align='center'>". $dados['id']."</td>";
		echo "<td>". $dados['codigo']."</td>";
		echo "<td>". $dados['produto']."</td>";
		echo "<td align='right'> R$ ". $dados['valor']."</td>";		
		if (empty($dados['imagem'])) { 
            $imagem = 'SemImagem.png'; 
        } 
        else { 
            $imagem = $dados['imagem']; 
        } 
        echo "<td align='center'><a href='imagens/$imagem'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
		}
	echo "</table>";


        //finaliza a conexão
        mysqli_close($conexao);
    ?>
</body>
</html>