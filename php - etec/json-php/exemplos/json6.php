<html>

<head>
    <title> JSON com PHP </title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    require("conexao.php");
    $sql = "select * from usuarios";
    $result = $conexao->query($sql);
    if (!$result) {
        die('Query Inválida: ' . $conexao->error);
    }
    $linha = 0;
    $jsonString = '[';
    while ($dados = $result->fetch_array()) {
        if ($linha <> 0) {
            $jsonString .= ",";
        }
        $jsonString .= '{';
        $jsonString .= '"usuario":"' . $dados['usuario'] . '",';
        $jsonString .= '"senha":"' . $dados['senha'] . '",';
        $jsonString .= '"acesso":"' . $dados['acesso'] . '"';
        $jsonString .= '}';
        $linha++;
    }
    $jsonString .= ']';
    $file = fopen("usuarios.json", "w+");
    fwrite($file, $jsonString);
    fclose($file);
    echo "Arquivo criado: <a href='usuarios.json'>Visualizar</a>";
    ?>
</body>

</html>