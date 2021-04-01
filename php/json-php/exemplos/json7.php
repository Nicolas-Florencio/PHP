<?php
    require("conexao.php");
    header('Content-Type: application/json');
    $sql = "select * from usuarios";
    $result = $conexao->query($sql);
    $r = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($r, JSON_UNESCAPED_UNICODE);
?>