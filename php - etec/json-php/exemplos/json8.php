<html>

<head>
    <title> JSON com PHP </title>
    <meta charset="UTF-8">
</head>
    <?php
    require("conexao.php");
    $sql = "select * from usuarios";

    $result = $conexao->query($sql);

    $r = $result->fetch_all(MYSQLI_ASSOC);
    $jsonString = json_encode($r, JSON_UNESCAPED_UNICODE);

    $file = fopen("usuarios2.json", "w+");

    fwrite($file, $jsonString);
    fclose($file);

    echo "Arquivo criado: <a href='usuarios2.json'>Visualizar</a>";
    ?>
</body>

</html>