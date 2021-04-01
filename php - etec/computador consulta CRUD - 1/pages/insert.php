<meta charset = "UTF-8">
    <h1 style = "text-align: center">Inserir</h1>
    <form action="insertRes.php" method = "post">

        <b>Marca: </b><br><br>

        <input type="radio" id = "amd" name="marca" value="amd">
            <label for="amd">AMD</label><br>
        <input type="radio" id = "intel" name="marca" value="intel" required>
            <label for="intel">Intel</label><br><br>

        <b>Modelo(linha): </b><input name = "modelo" type = "text" maxlength="10" placeholder = "ex: core i3" required><br><br>
        <b>Cache: </b><input name = "cache" type = "number" maxlength="3" placeholder = "apenas números" required><b> MB</b><br><br>
        <b>Litografia: </b><input name = "litografia" type = "number" maxlength="2" placeholder = "apenas números" required><b> NM</b><br><br>
        <b>Número(série): </b><input name = "numero" type = "text" maxlength="6" placeholder = "ex: 9100F" required><br><br>
        <b>Hyper Threading: </b>
        <input type="radio" id = "sim" name="hyperT" value="1" required>
            <label for="sim">Sim</label>
        <input type="radio" id = "não" name="hyperT" value="0">
            <label for="não">Não</label><br><br>
        
        <b>Núcleos: </b><input type = "number" name = "nucleos" required><br><br>
        <b>Plataforma: </b><input type = "text" name = "plataforma" placeholder = "ex: 1155" required><br><br>
        <b>Clock: </b><input type = "number" name = "clock" step = "0.01" placeholder = "ex: 5.6" required><br><br>
        <b>Turbo: </b>
        <input type="radio" id = "sim" name="turbo" value="1" required>
            <label for="sim">Sim</label>
        <input type="radio" id = "não" name="turbo" value="0">
            <label for="não">Não</label><br><br>
        
        <b>Vídeo integrado: </b>
        <input type="radio" id = "sim" name="videoIntegrado" value="1" required>
            <label for="sim">Sim</label>
        <input type="radio" id = "não" name="videoIntegrado" value="0">
            <label for="não">Não</label><br><br>

        <b>Uso: </b>
        <input type="radio" id = "desktop" name="uso" value="Desktop" required>
            <label for="desktop">Desktop</label>
        <input type="radio" id = "mobile" name="uso" value="Mobile">
            <label for="mobile">Mobile</label><br><br>
        
        <b>Imagem(logo): </b><input name = "imagem" type = "text" placeholder = "ex: imagem.png"><br><br>

        <input type = "submit" value = "Inserir">
        <input type = "reset" value = "Limpar">
    </form>
<br><li><a href="../index.php"> Menu principal </a></li><br>
