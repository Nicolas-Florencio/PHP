<meta charset="UTF-8">
<?php
    include_once ("../conexao.php");
    if(isset($_POST['id']) && is_numeric($_POST['id'])){
        
        $id = $_POST['id'];    
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
        
        $sqlUpdate = "update processador set 
        marca = '$marca', 
        modelo = '$modelo', 
        cache = $cache,
        litografia = $litografia,
        numero = '$numero',
        hyperT = $hyperT,
        nucleos = $nucleos,
        plataforma = '$plataforma',
        clock = $clock,
        turbo = $turbo,
        videoIntegrado = $videoIntegrado,
        uso = '$uso',
        imagem = '$imagem' 
        where id = $id";
            
            $resultado = @mysqli_query($conexao, $sqlUpdate);
            if (!$resultado) {
                die('Query Inválida: ' . @mysqli_error($conexao));
                
            } 
            else{
                echo "Editado com Sucesso<br><br>";
            }
        } 
        else {
            header('Location: update.php');
        }
        mysqli_close($conexao);
?>
<br><li><a href="../index.php"> Menu principal </a></li><br>