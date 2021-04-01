<?php 
    function soma ($n1, $n2){
        $resSoma = $n1 + $n2;
        return $resSoma;
    }

    function sub ($n1, $n2){
        $resSub = $n1 - $n2;
        return $resSub;
    }

    function mult ($n1, $n2){
        $resMult = $n1 * $n2;
        return $resMult;
    }

    function div ($n1, $n2){
        $resDiv = $n1 / $n2;
        return $resDiv;
    }

    function maiuscula ($nome){
        $nomeMaiu = strtoupper($nome);
        return $nomeMaiu;
    }

    function data ($data1){
        date_default_timezone_set("America/Sao_Paulo");
        $dataConvert = date("$y/$m/$d");
        return $dataConvert;
    }
    
    function data2 ($data2){
        date_default_timezone_set("America/Sao_Paulo");
        $dataConvert2 = date("$d/$m/$y");
        return $dataConvert2;
    }

    
?>