<?php

    $data = time();

    date_default_timezone_set("America/Sao_Paulo");

    echo date("d-m-Y", $data);
    echo "<br>";
    echo date("H:i:s", $data);

?>