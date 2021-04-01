<meta charset="UTF-8">
<title>Segundos</title>
<?php

    $segundos = $_GET ["segundos"];
    date_default_timezone_set("UTC");

        strtotime($segundos);

        echo date("H:i:s", $segundos);
?>
<br><br><li><a href="ex. 7 form.php"> Calcular novamente </a></li><br>
<li><a href="./"> Voltar para os exercícios</a></li><br>
<li><a href="../../index.html"> Voltar para o Index de atividades</a></li>