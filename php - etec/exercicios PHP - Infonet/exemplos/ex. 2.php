<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
    <style>
        .produto{
            border: 1px solid black;
            height: 100%;
            width: 100%;
            max-width: 78%;
            margin: 0 auto;
            padding: 4% 10%;
            text-align: center;
            background-color: #C1D699;
            font-size: large;
        }
        .produto h3{
            border: 1px solid black;
            width: 80%;
            margin: 0 auto; 
            padding: 10px;
        }
        .texto{
            color: #F78716;

        }
    </style>
</head>
<body>
    <?php

    date_default_timezone_set("America/Sao_Paulo");

    $dataAtual = date("now");

    $dataCompra = "01 sep 2020";
    //data separação de 3 dias
    //data entrega prevista de 5 dias

    //data de separação
    echo "<div class='produto'>";
    
    echo "<br><h3>O produto está em sepração até: </h3><br>";
    echo date("d-m-Y", strtotime($dataCompra. " + 3 days"));
    $dataSep = date("d-m-Y", strtotime($dataCompra. " + 3 days"));


    //data de entrega
    echo "<br><br><h3>O produto será entregue até: </h3><br>";
    echo date("d-m-Y", strtotime($dataCompra. " + 8 days"));
    $dataEntrega = date("d-m-Y", strtotime($dataCompra. " + 8 days"));

    $dataAtual = date("d-m-Y");
    
    if($dataAtual > $dataEntrega){
        echo "<div class='texto'>";
        echo "<br><h3>O produto está atrasado, não foi entregue<br>".+($dataAtual - $dataEntrega)." dias de atraso</h3>";
        
    }

    else if($dataAtual < $dataEntrega and $dataAtual > $dataSep){
        echo "<br><br><h3>O produto foi entregue dentro do prazo</h3>"."No dia ".date("d-m", strtotime($dataAtual));
    }

    else{
        echo "<br><br><h3>O produto ainda está em separação</h3>";
    }
    echo "</div>";
    echo "</div>";
    ?>
</body>
</html>
