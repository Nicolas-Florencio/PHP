<?php

    $query = mysqli_query($conexao, "select * from processador");

    //verifica se a query retorna um valor
        if(!$query){

            die ("Query inválida: "
            . @mysqli_error($conexao));

        }

?>