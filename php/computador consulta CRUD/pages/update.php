<meta charset = "UTF-8">
<?php
    include_once ("../conexao.php");
    $id = $_POST['id'];
    $query = mysqli_query($conexao, "select * from processador where id = $id");
    $dados = mysqli_fetch_array($query);



?>


<form action="updateRes.php" method = "post">
    <input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>">
    
    <b>Marca anterior: <input value="<?php echo $dados['marca']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "amd" name="marca" value="amd" require>
            <label for="amd">AMD</label><br>
        <input type="radio" id = "intel" name="marca" value="intel" require>
            <label for="intel">Intel</label><br><br>

        <b>Modelo(linha): </b><input value="<?php echo $dados['modelo']; ?>" name = "modelo" type = "text" maxlength="10" placeholder = "ex: core i3"><br><br>

        <b>Cache: </b><input value="<?php echo $dados['cache']; ?>" name = "cache" type = "number" maxlength="3" placeholder = "apenas números"><b> MB</b><br><br>

        <b>Litografia: </b><input value="<?php echo $dados['litografia']; ?>" name = "litografia" type = "number" maxlength="2" placeholder = "apenas números"><b> NM</b><br><br>

        <b>Número(série): </b><input value="<?php echo $dados['numero']; ?>" name = "numero" type = "text" maxlength="6" placeholder = "ex: 9100F"><br><br>

        <b>Hyper Threading, opção anterior: <input value="<?php echo $dados['hyperT']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "sim" name="hyperT" value="1">
            <label for="sim">Sim (1)</label>
        <input type="radio" id = "não" name="hyperT" value="0">
            <label for="não">Não (0)</label><br><br>
        
        <b>Núcleos: </b><input value="<?php echo $dados['nucleos']; ?>" type = "number" name = "nucleos"><br><br>

        <b>Plataforma: </b><input value="<?php echo $dados['plataforma']; ?>" type = "text" name = "plataforma" placeholder = "ex: 1155"><br><br>

        <b>Clock: </b><input value="<?php echo $dados['clock']; ?>" type = "number" name = "clock" step = "0.01" placeholder = "ex: 5.6"><br><br>

        <b>Turbo, opção anterior: <input value="<?php echo $dados['turbo']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "sim" name="turbo" value="1">
            <label for="sim">Sim (1)</label>
        <input type="radio" id = "não" name="turbo" value="0">
            <label for="não">Não (0)</label><br><br>
        
        <b>Vídeo integrado, opção anterior: <input value="<?php echo $dados['videoIntegrado']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "sim" name="videoIntegrado" value="1">
            <label for="sim">Sim (1)</label>
        <input type="radio" id = "não" name="videoIntegrado" value="0">
            <label for="não">Não (0)</label><br><br>

        <b>Uso, opção anterior: <input value="<?php echo $dados['uso']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "desktop" name="uso" value="Desktop">
            <label for="desktop">Desktop</label>
        <input type="radio" id = "mobile" name="uso" value="Mobile">
            <label for="mobile">Mobile</label><br><br>
        
        <b>Imagem(logo): </b><input name = "imagem" type = "text" placeholder = "ex: imagem.png"><br><br>

        <input type = "submit" value = "Atualizar">
        <input type = "reset" value = "Limpar">
        <input type='button' onclick="window.location='consultaRes.php';" value="Voltar">
        
    </form>