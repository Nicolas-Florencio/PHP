<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Minhas fotos</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <label for="codigo">Nome:</label>
        <input type="text" name="nome" id="codigo"><br>

        <label for="arquivo">Arquivo: </label>
        <input type="file" name="arquivo" id="arquivo"><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar"><br><br>
    </form>

    <?php
        $imagens = scandir('imagens');

        for ($fig = 2; $fig < count($imagens); $fig++) {
        
            echo "<img src='imagens/$imagens[$fig]' width='100px' heigth='100px'>

            <a href='imagens/$imagens[$fig]' target='_blank'> 
            <img height= '2%' width='2%' src='search.svg'>
            </a>

            <a href='excluir.php?imagem=$imagens[$fig]'>
            <img height= '2%' width='2%' src='remove.svg'>
            </a>
            ";

            echo "<br><br>";
        }
    ?>
</body>
</html>