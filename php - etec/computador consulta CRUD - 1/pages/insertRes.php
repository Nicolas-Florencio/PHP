<meta charset = "UTF-8">
<?php
    include_once ("../conexao.php");

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $cache = $_POST['cache'];
        $litografia = $_POST['litografia'];
        $numero = $_POST['numero'];
        $hyperT = $_POST['hyperT'];
        $nucleos = $_POST['nucleos'];
        $plataforma = $_POST['plataforma'];
        $clock = $_POST['clock'];
        $turbo = $_POST['turbo'];
        $videoIntegrado = $_POST['videoIntegrado'];
        $uso = $_POST['uso'];
        $imagem = $_POST['imagem'];
        
        $sqlinsert = "insert into processador (marca, modelo, cache, litografia, numero, hyperT, nucleos, plataforma, clock, turbo, videoIntegrado, uso, imagem)
        values( 
            '$marca', 
            '$modelo',
            $cache,
            $litografia,
            '$numero',
            $hyperT, 
            $nucleos, 
            '$plataforma', 
            $clock, 
            $turbo, 
            $videoIntegrado, 
            '$uso',
            '$imagem'
            )";
            
            $resultado = @mysqli_query($conexao, $sqlinsert);
            if (!$resultado) {
                die('Query Inválida: ' . @mysqli_error($conexao));
            } 
            else {
                echo "Registro Cadastrado com Sucesso<br><br>";
            }
    
        // header('Location: insert.php');
            
            mysqli_close($conexao);
            
            ?>
<li><a href="insert.php"> Inserir novamente </a></li>
<br><li><a href="../index.php"> Menu principal </a></li><br>