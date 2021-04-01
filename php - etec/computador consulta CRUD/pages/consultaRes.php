<meta charset = "UTF-8">
<?php
    include_once ("../conexao.php");
    
    if(isset($_GET['id']) && is_numeric($_GET['id'])){

        $id = $_GET['id'];
    } 
    else {
        header('Location: consulta.php');
    } 
    $query = mysqli_query($conexao, "select * from processador where id = $id");
    
    //verifica se a query retorna um valor
    if(!$query){
        
        die ("Query inválida: "
        . @mysqli_error($conexao));
        
    }
    
    $num = @mysqli_num_rows($query);
    if($num == 0){
        echo "<b>ID não localizado!!!!<br><br></b>";
    }
    else{
        include ("../tabelas/tabelaCons.php");
    }
    mysqli_close($conexao);    
?>
<br>
        <form action="deleteRes.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
                    <input type="submit" value="Excluir">
        </form>
        <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" value="Editar">
        </form>
<li><a href="consulta.php"> Consultar novamente </a></li>
<br><li><a href="../index.php"> Menu principal </a></li><br>
